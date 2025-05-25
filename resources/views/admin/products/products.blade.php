@extends('admin.layout')

@section('title', 'Produits')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/products/products.css') }}">
@endpush

@section('content')
<div class="content">
    @if (session('success'))
        <div id="success-message">
            {!! session('success') !!}
        </div>
    @endif

    <div class="title-info">
        <p>Produits</p>
        <i class="fa-solid fa-box"></i>
    </div>

    <div class="data-info">
        <div class="box">
            <i class="fa-solid fa-boxes-stacked"></i>
            <div class="data">
                <p>Total Produits</p>
                <span>{{ $totalProducts }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-check-circle"></i>
            <div class="data">
                <p>Produits Disponibles</p>
                <span>{{ $totalAvailable }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <div class="data">
                <p>Stock Faible</p>
                <span>{{ $lowStock }}</span>
            </div>
        </div>
    </div>

    <form method="GET" action="{{ route('admin.products') }}" class="search-form">
        <input type="text" 
               name="search" 
               class="search-input"
               placeholder="🔍 Rechercher par ID, nom, genre, statut..." 
               value="{{ request('search') }}">
        
        <button type="submit" class="search-button">
            Rechercher
        </button>

        @if(request('search'))
            <a href="{{ route('admin.products') }}" class="reset-button">
                Réinitialiser
            </a>
        @endif
    </form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Prix(MAD)</th>
                <th>Quantité</th>
                <th>Statut</th>
                <th>Date création</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category === 'male' ? 'Homme' : 'Femme' }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        @if ($product->status === 'available')
                            <span class="status-available">Disponible</span>
                        @else
                            <span class="status-unavailable">Indisponible</span>
                        @endif
                    </td>
                    <td>{{ $product->created_at->format('d/m/Y') }}</td>
                    <td class="actions">
                        <a href="{{ route('admin.products.edit', $product->id) }}" title="Modifier">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Supprimer ce produit ?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucun produit trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
        <a href="{{ route('admin.products.create_product') }}" class="add-product-btn">
            <i class="fa-solid fa-plus"></i> Ajouter un produit
        </a>

        @if ($products->hasPages())
            {{ $products->links('vendor.pagination.custom') }}
        @endif
    </div>
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
