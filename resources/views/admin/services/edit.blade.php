@extends('admin.layout')

@section('title', 'Modifier un Service')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/services/edit.css') }}">
@endpush

@section('content')
<div>
    <div class="title-info">
        <p>Modifier les informations du service</p>
        <i class="fa-solid fa-scissors" style="font-size:20px"></i>
    </div>

    <div class="container">
        @if ($errors->any())    
            <div class="alert alert-danger">
                <strong>Erreurs :</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom du service</label>
                <input type="text" id="name" name="name" value="{{ old('name', $service->name) }}" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description principale</label>
                <textarea id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description_1">Description supplémentaire 1</label>
                <textarea id="description_1" name="description_1">{{ old('description_1', $service->description_1) }}</textarea>
                @error('description_1')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description_2">Description supplémentaire 2</label>
                <textarea id="description_2" name="description_2">{{ old('description_2', $service->description_2) }}</textarea>
                @error('description_2')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description_3">Description supplémentaire 3</label>
                <textarea id="description_3" name="description_3">{{ old('description_3', $service->description_3) }}</textarea>
                @error('description_3')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gender">Genre</label>
                <select id="gender" name="gender" required>
                    <option value="">Sélectionnez un genre</option>
                    <option value="male" {{ old('gender', $service->gender) == 'male' ? 'selected' : '' }}>Homme</option>
                    <option value="female" {{ old('gender', $service->gender) == 'female' ? 'selected' : '' }}>Femme</option>
                </select>
                @error('gender')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id">Catégorie</label>
                <select id="category_id" name="category_id" required>
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                @if($service->image_path)
                    <div class="current-image">
                        <img src="{{ asset($service->image_path) }}" alt="" style="max-width: 200px;">
                        <p>Image actuelle</p>
                    </div>
                @endif
                <input type="file" id="image" name="image" accept="image/*">
                @error('image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon_1">Icône 1</label>
                @if($service->icon_1)
                    <div class="current-image">
                        <img src="{{ asset($service->icon_1) }}" alt="" style="max-width: 100px;">
                        <p>Icône 1 actuelle</p>
                    </div>
                @endif
                <input type="file" id="icon_1" name="icon_1" accept="image/*">
                @error('icon_1')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon_2">Icône 2</label>
                @if($service->icon_2)
                    <div class="current-image">
                        <img src="{{ asset($service->icon_2) }}" alt="" style="max-width: 100px;">
                        <p>Icône 2 actuelle</p>
                    </div>
                @endif
                <input type="file" id="icon_2" name="icon_2" accept="image/*">
                @error('icon_2')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Prix (MAD)</label>
                <input type="number" id="price" name="price" value="{{ old('price', $service->price) }}" min="0" step="0.01" required>
                @error('price')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="duration">Durée (minutes)</label>
                <input type="number" id="duration" name="duration" value="{{ old('duration', $service->duration) }}" min="1" required>
                @error('duration')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="badge">Badge</label>
                <input type="text" id="badge" name="badge" value="{{ old('badge', $service->badge) }}" maxlength="50">
                @error('badge')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="is_active">Statut</label>
                <select id="is_active" name="is_active">
                    <option value="1" {{ old('is_active', $service->is_active) ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ old('is_active', $service->is_active) ? '' : 'selected' }}>Inactif</option>
                </select>
                @error('is_active')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('admin.services') }}" class="btn-cancel">Annuler</a>
                <button type="submit" class="btn-submit">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>
@endsection 