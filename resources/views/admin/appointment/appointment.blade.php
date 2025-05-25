@extends('admin.layout')

@section('title', 'Rendez-vous')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/appointment/appointment.css') }}">
@endpush

@section('content')
    <div class="content">
        @if (session('success'))
            <div id="success-message">
                {!! session('success') !!}
            </div>
        @endif

        <div class="title-info">
            <p>Rendez-vous</p>
            <i class="fa-solid fa-calendar-check"></i>
        </div>

        <div class="data-info"> 
            <div class="box">
                <i class="fas fa-calendar"></i>
                <div class="data">
                    <p>Total</p>
                    <span>{{ $total }}</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-check-circle"></i>
                <div class="data">
                    <p>Confirmés</p>
                    <span>{{ $confirmedCount }}</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times-circle"></i>
                <div class="data">
                    <p>Annulés</p>
                    <span>{{ $cancelledCount }}</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-hourglass-half"></i>
                <div class="data">
                    <p>En attente</p>
                    <span>{{ $pendingCount }}</span>
                </div>
            </div>
        </div>

        <form method="GET" action="{{ route('admin.appointment') }}" class="search-form">
            <input type="text" 
                   name="search" 
                   class="search-input"
                   placeholder="🔍 Nom, Email, Service ..." 
                   value="{{ request('search') }}">

            <button type="submit" class="search-button">
                Rechercher
            </button>

            @if(request('search'))
                <a href="{{ route('admin.appointment') }}" class="reset-button">
                    Réinitialiser
                </a>
            @endif
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Client</th>
                    <th>Employé</th>
                    <th>Service</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if($appointments->count() > 0)
                <tbody>
                    @foreach($appointments as $apt)
                        <tr>
                            <td>{{ $apt->id }}</td>
                            <td>{{ $apt->date }}</td>
                            <td>{{ $apt->time }}</td>
                            <td>{{ $apt->client->first_name }} {{ $apt->client->last_name }}</td>
                            <td>{{ $apt->employee->first_name }} {{ $apt->employee->last_name }}</td>
                            <td>{{ $apt->service->name }}</td>
                            <td>
                                @if($apt->status === 'confirmed')
                                    <span class="status-confirmed">Confirmé</span>
                                @elseif($apt->status === 'pending')
                                    <span class="status-pending">En attente</span>
                                @else
                                    <span class="status-cancelled">Annulé</span>
                                @endif
                            </td>
                            <td class="actions">
                                <a href="{{ route('admin.appointment.edit', $apt->id) }}" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.appointment.destroy', $apt->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Supprimer ce rendez-vous ?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <tr>
                    <td colspan="8">Aucun rendez-vous trouvé.</td>
                </tr>
            @endif
        </table>

        @if ($appointments->hasPages())
            {{ $appointments->links('vendor.pagination.custom') }}
        @endif
    </div>

    <script>
        setTimeout(() => {
            const msg = document.getElementById('success-message');
            if (msg) {
                msg.style.transition = "opacity 0.5s";
                msg.style.opacity = 0;
                setTimeout(() => msg.remove(), 500);
            }
        }, 5000);
    </script>
@endsection
