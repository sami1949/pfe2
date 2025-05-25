<x-guest-layout>
    <style>
        .auth-logo-container {
            width: 180px;
            height: 180px;
            margin: 0 auto 2rem;
            border-radius: 50%;
            overflow: hidden;
            background-color: #f3f4f6; /* gris clair */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .auth-logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 24px;
        }

        @media (max-width: 640px) {
            .auth-logo-container {
                width: 150px;
                height: 150px;
            }

            .auth-logo {
                padding: 20px;
            }
        }
    </style>

    <div class="auth-card">
        <!-- Session Status -->
        <x-auth-session-status class="auth-message" :status="session('status')" />

        <h2 class="page-title">
            <i class="fas fa-user-circle"></i>
            {{ __('Connexion') }}
        </h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div class="input-group">
                <x-input-label class="input-label" for="email">
                    <i class="fas fa-envelope"></i>
                    {{ __('Email') }}
                </x-input-label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <x-text-input id="email"
                                  class="custom-input"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required
                                  autofocus
                                  placeholder="Votre adresse email"
                                  autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="input-group">
                <x-input-label class="input-label" for="password">
                    <i class="fas fa-lock"></i>
                    {{ __('Mot de passe') }}
                </x-input-label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <x-text-input id="password"
                                  class="custom-input"
                                  type="password"
                                  name="password"
                                  required
                                  placeholder="Votre mot de passe"
                                  autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <label for="remember_me" class="custom-checkbox-label">
                    <input id="remember_me"
                           type="checkbox"
                           class="custom-checkbox"
                           name="remember">
                    <span class="checkbox-text">
                        <i class="fas fa-check-circle"></i>
                        {{ __('Se souvenir de moi') }}
                    </span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between gap-x-8 mt-6 w-full">
                @if (Route::has('password.request'))
                    <a class="auth-link flex-shrink-0" href="{{ route('password.request') }}">
                        <i class="fas fa-key"></i>
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <button type="submit" class="custom-button flex-grow">
                    <i class="fas fa-sign-in-alt"></i>
                    {{ __('Se connecter') }}
                    <div class="loading-indicator">
                        <div class="spinner"></div>
                    </div>
                </button>
            </div>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">{{ __("Vous n'avez pas de compte?") }}</p>
                <a href="{{ route('register') }}" class="auth-link register-link">
                    <i class="fas fa-user-plus"></i>
                    {{ __("S'inscrire") }}
                </a>
            </div>
        </form>

        <!-- Copyright -->
        <div class="copyright-footer mt-8 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} EleganceVibe. {{ __('Tous droits réservés') }}</p>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('client/css/auth.css') }}">
</x-guest-layout>
