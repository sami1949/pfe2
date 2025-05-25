@extends('admin.layout')

@section('title', 'Catégories de Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/categories/categories.css') }}">
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

    <!-- Titre -->
    <div class="title-info">
        <p>Catégories de Services</p>
        <i class="fa-solid fa-list"></i>
    </div>

    <!-- Statistiques des catégories -->
    <div class="data-info">
        <div class="box">
            <i class="fa-solid fa-list"></i>
            <div class="data">
                <p>Total Catégories</p>
                <span>{{ $totalCategories }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-venus-mars"></i>
            <div class="data">
                <p>Catégories Femmes</p>
                <span>{{ $femmeCategories }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-mars"></i>
            <div class="data">
                <p>Catégories Hommes</p>
                <span>{{ $hommeCategories }}</span>
            </div>
        </div>
    </div>

    <!-- Formulaire de recherche -->
    <form method="GET" action="{{ route('admin.categories') }}" class="search-form">
        <input type="text" 
               name="search" 
               class="search-input"
               placeholder="🔍 Rechercher par titre"
               value="{{ request('search') }}">
        
        <button type="submit" class="search-button">
            Rechercher
        </button>

        @if(request('search'))
            <a href="{{ route('admin.categories') }}" class="reset-button">
                Réinitialiser
            </a>
        @endif
    </form>

    <!-- Tableau des catégories -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Ordre</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        <img src="{{ asset($category->image_path) }}" 
                             alt="{{ $category->title }}" 
                             class="category-image">
                    </td>
                    <td>
                        <span>{{ $category->title }}</span>
                        @if($category->icon)
                            <i class="{{ $category->icon }} category-icon"></i>
                        @endif
                    </td>
                    <td>
                        <div class="description-text" title="{{ $category->description }}">
                            {{ Str::limit($category->description, 50) }}
                        </div>
                    </td>
                    <td>{{ $category->category === 'homme' ? 'Homme' : 'Femme' }}</td>
                    <td>{{ $category->display_order }}</td>
                    <td>
                        <span class="status-badge {{ $category->is_active ? 'active' : 'inactive' }}">
                            {{ $category->is_active ? 'Actif' : 'Inactif' }}
                        </span>
                    </td>
                    <td>
                        <div style="display: inline-block; margin: 0 5px;">
                            <a href="{{ route('admin.categories.edit', $category) }}">
                                <i class="fas fa-edit fa-lg" style="color:#55DD5E;"></i>
                            </a>
                        </div>
                        <div style="display: inline-block; margin: 0 5px;">
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Supprimer cette catégorie ?')" style="background: none; border: none; cursor: pointer;">
                                    <i class="fas fa-trash-alt fa-lg" style="color:red;"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucune catégorie trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer-actions">
        <a href="{{ route('admin.categories.create') }}" class="add-button">
            <i class="fa-solid fa-plus"></i> Ajouter une catégorie
        </a>

        @if ($categories->hasPages())
            {{ $categories->links('vendor.pagination.custom') }}
        @endif
    </div>
</div>

<script>
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
</script>
@endsection
