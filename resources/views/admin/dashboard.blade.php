@extends('admin.layout')

@section('title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')
    <div class="content">
        <div class="title-info">
            <p>Tableau de bord</p>
            <i class="fas fa-chart-bar"></i>
        </div>

        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>Utilisateurs</p>
                    <span>{{$userCount}}</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-bottle-droplet"></i>
                <div class="data">
                    <p>Produits</p>
                    <span>{{$productCount}}</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-spa"></i>
                <div class="data">
                    <p>Services</p>
                    <span>{{$serviceCount}}</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-dollar-sign"></i>
                <div class="data">
                    <p>Revenus</p>
                    <span>10000</span>
                </div>
            </div>
        </div>

        <div class="title-info">
            <p>Rendez-vous du jour</p>
            <i class="fa-solid fa-calendar-check"></i>
        </div>

        <form method="GET" action="{{ route('admin.dashboard') }}" class="search-form">
            <input type="text" 
                   name="search" 
                   class="search-input"
                   placeholder="🔍 Rechercher par ID, nom du client/employé, statut..."
                   value="{{ request('search') }}">
            
            <button type="submit" class="search-button">
                Rechercher
            </button>

            @if(request('search'))
                <a href="{{ route('admin.dashboard') }}" class="reset-button">
                    Réinitialiser
                </a>
            @endif
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date & Heure</th>
                    <th>Client</th>
                    <th>Employé</th>
                    <th>Service</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                    <tr>
                        <td>#{{ $appointment->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }} à {{ $appointment->time }}</td>
                        <td>{{ $appointment->client->first_name }} {{ $appointment->client->last_name }}</td>
                        <td>{{ $appointment->employee->first_name }} {{ $appointment->employee->last_name }}</td>
                        <td>{{ $appointment->service->name }}</td>
                        <td>
                            @if($appointment->status === 'confirmed')
                                <span class="status-confirmed">Confirmé</span>
                            @elseif($appointment->status === 'pending')
                                <span class="status-pending">En attente</span>
                            @else
                                <span class="status-cancelled">Annulé</span>
                            @endif
                        </td>
                        <td class="actions">
                            <a href="{{ route('admin.appointment.edit', $appointment->id) }}" title="Modifier">
                                <i class="fas fa-edit" style="color: #10B981;"></i>
                            </a>
                            <form action="{{ route('admin.appointment.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Supprimer" 
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?')">
                                    <i class="fas fa-trash-alt" style="color: #EF4444;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center;">Aucun rendez-vous aujourd'hui</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($appointments->hasPages())
            <div style="margin-top: 20px;">
                {{ $appointments->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>  
@endsection