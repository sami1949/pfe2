@extends('admin.layout')

@section('title', 'Modifier une Catégorie')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/categories/edit.css') }}">
@endpush

@section('content')
<div>
    <div class="title-info">
        <p>Modifier une Catégorie</p>
        <i class="fa-solid fa-edit" style="font-size:20px"></i>
    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert">
                <strong>Erreurs :</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.categories.update', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" value="{{ old('title', $category->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ old('description', $category->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="category">Genre</label>
                <select id="category" name="category" required>
                    <option value="homme" {{ $category->category === 'homme' ? 'selected' : '' }}>Homme</option>
                    <option value="femme" {{ $category->category === 'femme' ? 'selected' : '' }}>Femme</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">
                @if($category->image_path)
                    <div class="current-image">
                        <img src="{{ asset($category->image_path) }}" alt="Image actuelle">
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Icône (classe FontAwesome)</label>
                <input type="text" id="icon" name="icon" value="{{ old('icon', $category->icon) }}" placeholder="ex: fa-solid fa-spa">
            </div>

            <div class="form-group">
                <label for="route_name">Nom de la Route</label>
                <input type="text" id="route_name" name="route_name" value="{{ old('route_name', $category->route_name) }}" placeholder="ex: spa">
            </div>

            <div class="form-group">
                <label for="display_order">Ordre d'Affichage</label>
                <input type="number" id="display_order" name="display_order" value="{{ old('display_order', $category->display_order) }}" required min="0">
            </div>

            <div class="form-group">
                <label for="is_active">Statut</label>
                <select id="is_active" name="is_active">
                    <option value="1" {{ $category->is_active ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ !$category->is_active ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>

            <div class="form-actions">
                <a href="{{ route('admin.categories') }}">Annuler</a>
                <button type="submit">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>
@endsection 