<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('client/css/auth.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center py-6">
            <div class="logo-container">
                <a href="/" class="logo-link">
                    <img src="{{ asset('client/images/acceuil/logo.jpg') }}" alt="EleganceVibe" class="auth-logo">
                </a>
            </div>

            <div class="w-full sm:max-w-2xl px-6 py-4 overflow-hidden">
                {{ $slot }}
            </div>
        </div>

        <style>
            .logo-container {
                text-align: center;
                margin-bottom: 3rem;
                position: relative;
                width: 180px;
                height: 180px;
            }

            .logo-container::before {
                content: '';
                position: absolute;
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
                border: 2px solid var(--accent);
                border-radius: 50%;
                opacity: 0.3;
                animation: pulse 2s infinite;
            }

            .logo-container::after {
                content: '';
                position: absolute;
                top: -5px;
                left: -5px;
                right: -5px;
                bottom: -5px;
                border: 1px solid var(--primary);
                border-radius: 50%;
                opacity: 0.2;
            }

            .logo-link {
                display: block;
                width: 100%;
                height: 100%;
                transition: all 0.5s ease;
                position: relative;
                z-index: 1;
            }

            .logo-link::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                backdrop-filter: blur(5px);
                transition: all 0.3s ease;
                transform: scale(0.95);
                opacity: 0;
            }

            .logo-link:hover::before {
                transform: scale(1);
                opacity: 1;
            }

            .logo-link:hover .auth-logo {
                transform: scale(1.05);
                filter: brightness(1.2) contrast(1.1);
            }

            .auth-logo {
                width: 100%;
                height: 100%;
                object-fit: contain;
                border-radius: 50%;
                transition: all 0.5s ease;
                filter: brightness(1.1) contrast(1.05);
                padding: 10px;
            }

            .animate-fade-in {
                animation: fadeIn 1.2s ease-in-out;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes pulse {
                0% {
                    transform: scale(1);
                    opacity: 0.3;
                }
                50% {
                    transform: scale(1.05);
                    opacity: 0.2;
                }
                100% {
                    transform: scale(1);
                    opacity: 0.3;
                }
            }

            @media (max-width: 640px) {
                .logo-container {
                    width: 150px;
                    height: 150px;
                    margin-bottom: 2rem;
                }
            }
        </style>
    </body>
</html>
