@extends('admin.layout')

@section('title', 'Revenus')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/income/income.css') }}">
@endpush

@section('content')
    <div class="content">
        @if (session('success'))
            <div id="success-message" class="alert-message alert-success">
                {!! session('success') !!}
            </div>
        @endif

        @if (session('error'))
            <div id="error-message" class="alert-message alert-error">
                {!! session('error') !!}
            </div>
        @endif

        <div class="title-info">
            <p>Revenus</p>
            <i class="fa-solid fa-money-bill"></i>
        </div>

        <div class="data-info">
            <div class="box">
                <i class="fa-solid fa-money-bill"></i>
                <div class="data">
                    <p>Revenu Total</p>
                    <span>{{ number_format($totalIncome ?? 0, 2) }} MAD</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-chart-line"></i>
                <div class="data">
                    <p>Valeur Moyenne</p>
                    <span>{{ number_format($averageIncome ?? 0, 2) }} MAD</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-receipt"></i>
                <div class="data">
                    <p>Total Transactions</p>
                    <span>{{ $totalTransactions ?? 0 }}</span>
                </div>
            </div>
        </div>

        <form method="GET" action="{{ route('admin.income') }}" class="filter-form">
            <div class="date-group">
                <label for="start_date" class="filter-label">Du:</label>
                <input type="date" 
                    id="start_date" 
                    name="start_date" 
                    value="{{ request('start_date') }}" 
                    class="date-input">
            </div>

            <div class="date-group">
                <label for="end_date" class="filter-label">Au:</label>
                <input type="date" 
                    id="end_date" 
                    name="end_date" 
                    value="{{ request('end_date') }}" 
                    class="date-input">
            </div>

            <button type="submit" class="filter-button">
                <i class="fa-solid fa-filter"></i> Filtrer
            </button>

            @if(request('start_date') || request('end_date'))
                <a href="{{ route('admin.income') }}" class="reset-button">
                    <i class="fa-solid fa-rotate-left"></i> Réinitialiser
                </a>
            @endif
        </form>

        <div class="title-info">
            <p>Top 5 Produits</p>
            <i class="fa-solid fa-box"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Revenu(MAD)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($topProducts as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity_sold }}</td>
                        <td>{{ number_format($product->total_revenue, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Aucun produit trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="title-info">
            <p>Top 5 Services</p>
            <i class="fa-solid fa-star"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Rendez-vous</th>
                    <th>Revenu(MAD)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($topServices as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->total_appointments }}</td>
                        <td>{{ number_format($service->total_revenue, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Aucun service trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="title-info">
            <p>Transactions</p>
            <i class="fa-solid fa-receipt"></i>
        </div>

        <form method="GET" action="{{ route('admin.income') }}" class="search-form">
            <input type="text" 
                name="search" 
                class="search-input"
                placeholder="🔍 Rechercher une transaction..." 
                value="{{ request('search') }}">
            
            <button type="submit" class="search-button">
                Rechercher
            </button>

            @if(request('search'))
                <a href="{{ route('admin.income') }}" class="reset-button">
                    Réinitialiser
                </a>
            @endif
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Client</th>
                    <th>Montant(MAD)</th>
                    <th>Date</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $transaction)
                    <tr>
                        <td>#{{ $transaction['id'] }}</td>
                        <td>{{ $transaction['type'] }}</td>
                        <td>{{ $transaction['client'] }}</td>
                        <td>{{ number_format($transaction['amount'], 2) }} MAD</td>
                        <td>{{ \Carbon\Carbon::parse($transaction['date'])->format('d/m/Y H:i') }}</td>
                        <td>
                            <span class="status-badge {{ $transaction['status'] === 'paid' ? 'success' : 'pending' }}">
                                {{ $transaction['status'] === 'paid' ? 'Payé' : 'En attente' }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Aucune transaction trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($transactions instanceof \Illuminate\Pagination\LengthAwarePaginator && $transactions->hasPages())
            <div class="pagination-container">
                {{ $transactions->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function () {
                const successMsg = document.getElementById('success-message');
                const errorMsg = document.getElementById('error-message');
                
                if (successMsg) {
                    successMsg.style.transition = "opacity 0.5s ease";
                    successMsg.style.opacity = 0;
                    setTimeout(() => successMsg.remove(), 500);
                }
                
                if (errorMsg) {
                    errorMsg.style.transition = "opacity 0.5s ease";
                    errorMsg.style.opacity = 0;
                    setTimeout(() => errorMsg.remove(), 500);
                }
            }, 5000);
        });
    </script>

    <style>
        .status-badge {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: bold;
        }
        .status-badge.success {
            background-color: #2ecc71;
            color: white;
        }
        .status-badge.pending {
            background-color: #f1c40f;
            color: white;
        }
    </style>
@endsection