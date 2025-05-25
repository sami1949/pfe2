<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name', 'EleganceVibe') }} - @yield('title', 'Salon de Beauté Premium')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        .gradient-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 100%);
        }
        .submenu {
            transform: translateY(10px);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
        }
        .menu-item:hover .submenu {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }
        .nav-indicator {
            width: 0;
            height: 2px;
            background-color: #F59E0B;
            transition: width 0.3s ease;
        }
        .nav-link:hover .nav-indicator {
            width: 100%;
        }
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .mobile-menu {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            .mobile-menu.active {
                transform: translateX(0);
            }
        }
    </style>
    @yield('styles')
</head>
<body class="min-h-screen bg-gray-50">
    <div class="relative min-h-screen flex flex-col">
        @include('layouts.navigation')
        
        <main class="flex-grow">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    @yield('scripts')
</body>
</html> 