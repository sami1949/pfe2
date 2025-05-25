<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

    <title>@yield("title") - EleganceVibe Admin</title>
    @stack('styles')

</head>
<body>
    <div class="admin-container">
        <div class="menu">
            <ul>
                <li class="profile" onclick="window.location='{{ route('profile.edit') }}'" style="cursor:pointer;">
                    <div class="img-box">
                        <img src="{{ asset('assets/profile.webp') }}" alt="profile">
                    </div>
                    <h2>{{ Auth::user()->first_name }}</h2>
                </li>

                <li style="--item-index: 1">
                    <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Centre</p>
                    </a>
                </li>

                <li style="--item-index: 2">
                    <a class="{{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}">
                        <i class="fas fa-user-group"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>

                <li style="--item-index: 3">
                    <a class="{{ Request::routeIs('admin.products*') ? 'active' : '' }}" href="{{ route('admin.products') }}">
                        <i class="fa-solid fa-box-open"></i>
                        <p>Produits</p>
                    </a>
                </li>

                <li style="--item-index: 4">
                    <a class="{{ Request::routeIs('admin.orders*') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                        <i class="fa-solid fa-list-check"></i>
                        <p>Commandes</p>
                    </a>
                </li>

                <li style="--item-index: 5">
                    <a class="{{ Request::routeIs('admin.appointment*') ? 'active' : '' }}" href="{{ route('admin.appointment') }}">
                        <i class="fas fa-calendar-check"></i>
                        <p>Réservations</p>
                    </a>
                </li>

                <li style="--item-index: 6">
                    <a class="{{ Request::routeIs('admin.services*') ? 'active' : '' }}" href="{{ route('admin.services') }}">
                        <i class="fa-solid fa-spa"></i>
                        <p>Services</p>
                    </a>
                </li>

                <li style="--item-index: 7">
                    <a class="{{ Request::routeIs('admin.categories*') ? 'active' : '' }}" href="{{ route('admin.categories') }}">
                        <i class="fa-solid fa-list"></i>
                        <p>Catégories</p>
                    </a>
                </li>

                <li style="--item-index: 8">
                    <a class="{{ Request::routeIs('admin.income*') ? 'active' : '' }}" href="{{ route('admin.income') }}">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <p>Revenus</p>
                    </a>
                </li>

                <li class="log-out">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-button">
                            <i class="fas fa-sign-out"></i>
                            <p>Déconnexion</p>
                        </button>
                    </form>
                </li>
            </ul>
        </div>   

        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>