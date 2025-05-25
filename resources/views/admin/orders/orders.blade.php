@extends('admin.layout')

@section('title', 'Commandes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/orders/orders.css') }}">
@endpush

@section('content')
<div class="content">

    @if (session('success'))
        <div id="success-message">
            {!! session('success') !!}
        </div>
    @endif

    <!-- Titre -->
    <div class="title-info">
        <p>Commandes</p>
        <i class="fa-solid fa-clipboard-list"></i>
    </div>

    <!-- Statistiques des commandes -->
    <div class="data-info">
        <div class="box">
            <i class="fa-solid fa-list-check"></i>
            <div class="data">
                <p>Total Commandes</p>
                <span>{{ $totalOrders }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-circle-check"></i>
            <div class="data">
                <p>Commandes Payées</p>
                <span>{{ $paidOrders }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-clock"></i>
            <div class="data">
                <p>En Attente</p>
                <span>{{ $pendingOrders }}</span>
            </div>
        </div>
    </div>

    <!-- Formulaire de recherche -->
    <form method="GET" action="{{ route('admin.orders') }}" class="search-form">
        <input type="text" 
               name="search" 
               class="search-input"
               placeholder="🔍 Rechercher par ID commande, nom, statut..." 
               value="{{ request('search') }}">
        
        <button type="submit" class="search-button">
            Rechercher
        </button>

        @if(request('search'))
            <a href="{{ route('admin.orders') }}" class="reset-button">
                Réinitialiser
            </a>
        @endif
    </form>


    <!-- Tableau des commandes -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Utilisateur</th>
                <th>Panier</th>
                <th>Total(MAD)</th>
                <th>Statut</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->first_name ?? 'N/A' }} {{ $order->user->last_name ?? 'N/A' }}</td>
                    <td>#{{ $order->cart_id }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>
                        @if ($order->status === 'paid')
                            <span class="status-paid">Payée</span>
                        @elseif($order->status === 'pending')
                            <span class="status-pending">En attente</span>
                        @else
                            <span class="status-cancelled">Annulée</span>
                        @endif
                    </td>
                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    <td class="actions">
                        <a href="{{ route('admin.orders.edit', $order->id) }}" title="Modifier">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Supprimer cette commande ?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Aucune commande trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if ($orders->hasPages())
        {{ $orders->links('vendor.pagination.custom') }}
    @endif

</div>
@endsection

<script>
    setTimeout(function () {
        const msg = document.getElementById('success-message');
        if (msg) {
            msg.style.transition = "opacity 0.5s ease";
            msg.style.opacity = 0;
            setTimeout(() => msg.remove(), 500);
        }
    }, 5000);
</script>
