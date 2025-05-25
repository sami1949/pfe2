@extends('admin.layout')

@section('title', 'Créer une Catégorie')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/categories/create.css') }}">
@endpush

@section('content')
<div>
    <div class="title-info">
        <p>Créer une Catégorie</p>
        <i class="fa-solid fa-plus" style="font-size:20px"></i>
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

        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="category">Genre</label>
                <select id="category" name="category" required>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="icon">Icône (classe FontAwesome)</label>
                <input type="text" id="icon" name="icon" value="{{ old('icon') }}" placeholder="ex: fa-solid fa-spa">
            </div>

            <div class="form-group">
                <label for="route_name">Nom de la Route</label>
                <input type="text" id="route_name" name="route_name" value="{{ old('route_name') }}" placeholder="ex: spa">
            </div>

            <div class="form-group">
                <label for="display_order">Ordre d'Affichage</label>
                <input type="number" id="display_order" name="display_order" value="{{ old('display_order', 0) }}" required min="0">
            </div>

            <div class="form-group">
                <label for="is_active">Statut</label>
                <select id="is_active" name="is_active">
                    <option value="1">Actif</option>
                    <option value="0">Inactif</option>
                </select>
            </div>

            <div class="form-actions">
                <a href="{{ route('admin.categories') }}">Annuler</a>
                <button type="submit">Créer</button>
            </div>
        </form>
    </div>
</div>
@endsection 