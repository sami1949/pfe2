@extends('admin.layout')

@section('title', 'Utilisateurs')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/users/users.css') }}">
@endpush

@section('content')
    <div class="content">
        
        @if (session('success'))
            <div id="success-message">
                {!! session('success') !!}
            </div>
        @endif

        @if (session('error'))
            <div id="error-message">
                {!! session('error') !!}
            </div>
        @endif

        <div class="title-info">
            <p>Utilisateurs</p>
            <i class="fa-solid fa-users"></i>
        </div>

        <div class="data-info"> 
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>Clients</p>
                    <span>{{$clientCount}}</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-user-tie"></i>
                <div class="data">
                    <p>Employés</p>
                    <span>{{$employeCount}}</span>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-user-plus"></i>
                <div class="data">
                    <p>Inscrits ce mois-ci</p>
                    <span>{{$clientsThisMonth}}</span>
                </div>
            </div>
        </div>

        <div class="title-info">
            <p>Clients</p>
            <i class="fa-solid fa-handshake"></i>
        </div>

        <form method="GET" action="{{ route('admin.users') }}" class="search-form">
            <input type="text" 
                   name="search" 
                   class="search-input"
                   placeholder="🔍 Rechercher par email, nom ..." 
                   value="{{ request('search') }}">
            
            <button type="submit" class="search-button">
                Rechercher
            </button>

            @if(request('search'))
                <a href="{{ route('admin.users') }}" class="reset-button">
                    Réinitialiser
                </a>
            @endif
        </form>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if(count($clients)>0)
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client['id']}}</td>
                            <td>{{$client['first_name']}}</td>
                            <td>{{$client['last_name']}}</td>
                            <td>{{$client['email']}}</td> 
                            <td>{{$client['phone']}}</td>
                            <td class="actions">
                                <a href="{{ route('admin.users.edit', $client->id) }}" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $client->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Supprimer cet utilisateur ?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <tr>
                    <td colspan="6" class="text-center">Aucun utilisateur trouvé.</td>
                </tr>
            @endif
        </table>

        @if ($clients->hasPages())
            {{ $clients->links('vendor.pagination.custom') }}
        @endif

        <div class="title-info">
            <p>Employés</p>
            <i class="fa-solid fa-user-tie"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Spécialité</th>
                    <th>Disponibilité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if(count($employees)>0)
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee['id']}}</td>
                            <td>{{$employee['first_name']}}</td>
                            <td>{{$employee['last_name']}}</td>
                            <td>{{$employee['email']}}</td> 
                            <td>{{$employee['phone']}}</td>
                            <td>{{$employee['specialty']}}</td>
                            <td>{{$employee['availability']}}</td>
                            <td class="actions">
                                <a href="{{ route('admin.users.edit', $employee->id) }}" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Supprimer cet utilisateur ?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <tr>
                    <td colspan="8" class="text-center">Aucun employé trouvé.</td>
                </tr>
            @endif
        </table>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <a href="{{ route('admin.users.create_employee') }}" class="add-employee-btn">
                <i class="fa-solid fa-plus"></i> Ajouter un employé
            </a>

            @if ($employees->hasPages())
                {{ $employees->links('vendor.pagination.custom') }}
            @endif
        </div>
    </div>  
@endsection

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
    }, 10000);
</script>
