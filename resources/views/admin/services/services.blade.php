@extends('admin.layout')

@section('title', 'Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/services/services.css') }}">
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
        <p>Services</p>
        <i class="fa-solid fa-scissors"></i>
    </div>

    <div class="data-info">
        <div class="box">
            <i class="fa-solid fa-list"></i>
            <div class="data">
                <p>Total Services</p>
                <span>{{ $totalServices }}</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-clock"></i>
            <div class="data">
                <p>Durée Moyenne</p>
                <span>{{ $services->avg('duration') ?? 0 }} min</span>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-star"></i>
            <div class="data">
                <p>Service le plus demandé</p>
                <span>{{ $mostRequestedService ? $mostRequestedService->name : 'Aucun' }}</span>
            </div>
        </div>
    </div>

    <form method="GET" action="{{ route('admin.services') }}" class="search-form">
        <input type="text" 
               name="search" 
               class="search-input"
               placeholder="🔍 Rechercher par ID ou nom"
               value="{{ request('search') }}">
        
        <button type="submit" class="search-button">
            Rechercher
        </button>

        @if(request('search'))
            <a href="{{ route('admin.services') }}" class="reset-button">
                Réinitialiser
            </a>
        @endif
    </form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Catégorie</th>
                <th>Prix(MAD)</th>
                <th>Durée</th>
                <th>Badge</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>
                        <img src="{{ asset($service->image_path) }}" 
                             alt="{{ $service->name }}" 
                             class="service-image">
                    </td>
                    <td>
                        <span>{{ $service->name }}</span>
                        @if($service->description)
                            <i class="fas fa-info-circle info-icon" title="{{ $service->description }}"></i>
                        @endif
                    </td>
                    <td>{{ $service->gender === 'male' ? 'Homme' : 'Femme' }}</td>
                    <td>{{ $service->category->title ?? 'N/A' }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->duration }} min</td>
                    <td>
                        @if($service->badge)
                            <span class="badge">{{ $service->badge }}</span>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <span class="status-badge {{ $service->is_active ? 'active' : 'inactive' }}">
                            {{ $service->is_active ? 'Actif' : 'Inactif' }}
                        </span>
                    </td>
                    <td class="actions">
                        <a href="{{ route('admin.services.edit', $service) }}" title="Modifier">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Supprimer ce service ?')" title="Supprimer">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10">Aucun service trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer-actions">
        <a href="{{ route('admin.services.create') }}" class="add-button">
            <i class="fa-solid fa-plus"></i> Ajouter un service
        </a>

        @if ($services->hasPages())
            {{ $services->links('vendor.pagination.custom') }}
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
