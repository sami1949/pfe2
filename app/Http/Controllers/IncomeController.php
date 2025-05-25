<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        // Filtres de date
        $startDate = $request->start_date ? Carbon::parse($request->start_date)->startOfDay() : null;
        $endDate = $request->end_date ? Carbon::parse($request->end_date)->endOfDay() : null;

        // Query de base pour les commandes
        $ordersQuery = Order::where('status', 'paid');
        
        // Query de base pour les rendez-vous
        $appointmentsQuery = Appointment::where('status', 'completed');

        // Appliquer les filtres de date si présents
        if ($startDate && $endDate) {
            $ordersQuery->whereBetween('created_at', [$startDate, $endDate]);
            $appointmentsQuery->whereBetween('date', [$startDate, $endDate]);
        }

        // Calculer les revenus totaux des commandes
        $orderIncome = $ordersQuery->sum('total_amount');
        
        // Calculer les revenus totaux des rendez-vous
        $appointmentIncome = $appointmentsQuery
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->sum('services.price');

        // Top 5 produits
        $topProducts = DB::table('cart_items')
            ->join('products', 'cart_items.product_id', '=', 'products.id')
            ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
            ->join('orders', 'carts.id', '=', 'orders.cart_id')
            ->where('orders.status', 'paid')
            ->when($startDate && $endDate, function($query) use ($startDate, $endDate) {
                $query->whereBetween('orders.created_at', [$startDate, $endDate]);
            })
            ->select(
                'products.name',
                DB::raw('SUM(cart_items.quantity) as quantity_sold'),
                DB::raw('SUM(cart_items.quantity * cart_items.price) as total_revenue')
            )
            ->groupBy('products.id', 'products.name')
            ->orderByDesc('total_revenue')
            ->limit(5)
            ->get();

        // Top 5 services
        $topServices = DB::table('appointments')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->where('appointments.status', 'completed')
            ->when($startDate && $endDate, function($query) use ($startDate, $endDate) {
                $query->whereBetween('appointments.date', [$startDate, $endDate]);
            })
            ->select(
                'services.name',
                DB::raw('COUNT(*) as total_appointments'),
                DB::raw('SUM(services.price) as total_revenue')
            )
            ->groupBy('services.id', 'services.name')
            ->orderByDesc('total_revenue')
            ->limit(5)
            ->get();

        // Toutes les transactions (commandes et rendez-vous)
        $transactions = collect();

        // Ajouter les commandes
        $orders = Order::with('user')
            ->where('status', 'paid')
            ->when($startDate && $endDate, function($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            })
            ->get()
            ->map(function ($order) {
                return [
                    'id' => $order->id,
                    'type' => 'Commande',
                    'client' => $order->user->first_name . ' ' . $order->user->last_name,
                    'amount' => $order->total_amount,
                    'date' => $order->created_at,
                    'status' => $order->status
                ];
            });

        // Ajouter les rendez-vous
        $appointments = Appointment::with(['client', 'service'])
            ->where('status', 'completed')
            ->when($startDate && $endDate, function($query) use ($startDate, $endDate) {
                $query->whereBetween('date', [$startDate, $endDate]);
            })
            ->get()
            ->map(function ($appointment) {
                return [
                    'id' => $appointment->id,
                    'type' => 'Rendez-vous',
                    'client' => $appointment->client->first_name . ' ' . $appointment->client->last_name,
                    'amount' => $appointment->service->price,
                    'date' => $appointment->date,
                    'status' => 'paid'
                ];
            });

        // Fusionner et trier les transactions
        $transactions = $orders->concat($appointments)
            ->sortByDesc('date')
            ->values();

        // Calculer les statistiques globales
        $totalIncome = $orderIncome + $appointmentIncome;
        $totalTransactions = $transactions->count();
        $averageIncome = $totalTransactions > 0 ? $totalIncome / $totalTransactions : 0;

        // Paginer les transactions
        $perPage = 10;
        $page = $request->get('page', 1);
        $pagedData = $transactions->forPage($page, $perPage);
        $transactions = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedData,
            $transactions->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('admin.income.income', compact(
            'totalIncome',
            'averageIncome',
            'totalTransactions',
            'topProducts',
            'topServices',
            'transactions'
        ));
    }
} 