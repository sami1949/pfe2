<x-guest-layout>
    <div class="auth-card">
        <h2 class="page-title">
            <i class="fas fa-user-plus"></i>
            {{ __('Inscription') }}
        </h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div class="form-grid">
                <!-- First Name -->
                <div class="input-group">
                    <x-input-label class="input-label" for="first_name">
                        <i class="fas fa-user"></i>
                        {{ __('Prénom') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <x-text-input id="first_name" 
                                    class="custom-input" 
                                    type="text" 
                                    name="first_name" 
                                    :value="old('first_name')" 
                                    required 
                                    autofocus
                                    placeholder="Votre prénom" />
                    </div>
                    <x-input-error :messages="$errors->get('first_name')" class="error-message" />
                </div>

                <!-- Last Name -->
                <div class="input-group">
                    <x-input-label class="input-label" for="last_name">
                        <i class="fas fa-user"></i>
                        {{ __('Nom') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <x-text-input id="last_name" 
                                    class="custom-input" 
                                    type="text" 
                                    name="last_name" 
                                    :value="old('last_name')" 
                                    required
                                    placeholder="Votre nom" />
                    </div>
                    <x-input-error :messages="$errors->get('last_name')" class="error-message" />
                </div>

                <!-- Email Address -->
                <div class="input-group">
                    <x-input-label class="input-label" for="email">
                        <i class="fas fa-envelope"></i>
                        {{ __('Adresse e-mail') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <x-text-input id="email" 
                                    class="custom-input" 
                                    type="email" 
                                    name="email" 
                                    :value="old('email')" 
                                    required
                                    placeholder="votre@email.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>

                <!-- Phone -->
                <div class="input-group">
                    <x-input-label class="input-label" for="phone">
                        <i class="fas fa-phone"></i>
                        {{ __('Téléphone') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <x-text-input id="phone" 
                                    class="custom-input" 
                                    type="tel" 
                                    name="phone" 
                                    :value="old('phone')"
                                    placeholder="+33 6 XX XX XX XX" />
                    </div>
                    <x-input-error :messages="$errors->get('phone')" class="error-message" />
                </div>

                <!-- Gender -->
                <div class="input-group">
                    <x-input-label class="input-label" for="gender">
                        <i class="fas fa-venus-mars"></i>
                        {{ __('Genre') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-venus-mars input-icon"></i>
                        <select id="gender" 
                                name="gender" 
                                class="custom-input" 
                                required>
                            <option value="">{{ __('Sélectionnez votre genre') }}</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                <i class="fas fa-venus"></i> {{ __('Femme') }}
                            </option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                <i class="fas fa-mars"></i> {{ __('Homme') }}
                            </option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('gender')" class="error-message" />
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
                                    autocomplete="new-password"
                                    placeholder="Minimum 8 caractères" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>

                <!-- Confirm Password -->
                <div class="input-group">
                    <x-input-label class="input-label" for="password_confirmation">
                        <i class="fas fa-lock"></i>
                        {{ __('Confirmer le mot de passe') }}
                    </x-input-label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <x-text-input id="password_confirmation" 
                                    class="custom-input" 
                                    type="password" 
                                    name="password_confirmation" 
                                    required
                                    placeholder="Confirmez votre mot de passe" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="auth-link" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i>
                    {{ __('Déjà inscrit?') }}
                </a>

                <button type="submit" class="custom-button">
                    <i class="fas fa-user-plus"></i>
                    {{ __("S'inscrire") }}
                    <div class="loading-indicator">
                        <div class="spinner"></div>
                    </div>
                </button>
            </div>
        </form>

        <!-- Copyright -->
        <div class="copyright-footer">
            <p>&copy; {{ date('Y') }} EleganceVibe. {{ __('Tous droits réservés') }}</p>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('client/css/auth.css') }}">
</x-guest-layout>