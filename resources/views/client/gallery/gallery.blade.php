@extends('layouts.main')

@section('title', 'Galerie - Élégance Vibe')

@section('content')
    <video id="genre-video" class="video-bg" autoplay muted loop></video>

    <div class="hero-container">
        <video id="background-video" class="video-bg" autoplay muted loop>
            <source src="" type="video/mp4">
        </video>

        <div class="hero-content">
            <h1>Notre Galerie</h1>
            <p>Découvrez l'excellence et l'art du bien-être à travers nos réalisations</p>
            <a href="#gallery-section" class="hero-btn">Voir plus</a>
        </div>
    </div>

    <section class="gallery-section" id="gallery-section">
        <div class="section-header">
            <h2>Nos Réalisations</h2>
            <p>Explorez notre univers de beauté et de bien-être à travers ces instants capturés avec passion</p>
        </div>

        <div class="filters">
            @php
                // Détermine la route à utiliser en fonction de l'authentification
                $routeName = auth()->check() ? 'galleryClient' : 'gallery.public';
            @endphp

            <a href="{{ route($routeName, ['gender' => 'all']) }}" 
            class="filter-btn {{ $gender == 'all' ? 'active' : '' }}">Tous</a>
            
            <a href="{{ route($routeName, ['gender' => 'women']) }}" 
            class="filter-btn {{ $gender == 'women' ? 'active' : '' }}">Femmes</a>
            
            <a href="{{ route($routeName, ['gender' => 'men']) }}" 
            class="filter-btn {{ $gender == 'men' ? 'active' : '' }}">Hommes</a>
        </div>

        <div class="gallery-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($images as $img)
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <div class="gallery-card">
                                    <div class="front">
                                        <div class="gallery-imgwrap">
                                            <img src="{{ asset($img['url']) }}" alt="{{ $img['title'] }}" class="gallery-img">
                                        </div>
                                        <div class="gallery-overlay">
                                            <h3 class="gallery-title">{{ $img['title'] }}</h3>
                                            <p class="gallery-category">{{ $img['gender'] == 'women' ? 'Soin Féminin' : 'Soin Masculin' }}</p>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <h3>{{ $img['title'] }}</h3>
                                        <p>Une transformation élégante pour sublimer votre beauté naturelle.</p>
                                        <div class="back-actions">
                                            <button class="back-button">
                                                <i class="fas fa-arrow-left"></i>
                                                Retour
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <div class="featured-images">
            <div class="featured-image-container">
                <img src="/images/transition-women.jpg" alt="Transition Women" class="featured-image">
                <div class="featured-overlay">
                    <h3 class="featured-title">Transition Women</h3>
                </div>
            </div>
            <div class="featured-image-container">
                <img src="/images/transition-women2.jpg" alt="Transformation Femme" class="featured-image">
                <div class="featured-overlay">
                    <h3 class="featured-title">Transformation Femme</h3>
                </div>
            </div>
        </div>

        <a href="{{ route('serviceClient') }}" class="action-btn">Découvrir Nos Services</a>
    </section>
    
    <section class="materials-section">
        <div class="section-header">
            <h2>Nos Matériaux</h2>
            <p>Découvrez les matériaux de qualité que nous utilisons pour vous offrir une expérience exceptionnelle</p>
        </div>

        <div class="materials-slider">
            <div class="swiper materials-swiper">
                <div class="swiper-wrapper">
                    @php
                        $materials = [
                            [
                                'id' => 1, 
                                'name' => 'Huile Essentielle de Lavande',
                                'image' => '1.jpg',
                                'description' => 'Notre huile essentielle de lavande pure et naturelle, récoltée dans les champs de Provence.'
                            ],
                            [
                                'id' => 2, 
                                'name' => 'Crème Hydratante Naturelle',
                                'image' => '2.jpg',
                                'description' => 'Une formule riche en vitamines et minéraux qui nourrit votre peau en profondeur.'
                            ],
                            [
                                'id' => 3, 
                                'name' => 'Huile de Massage Bio',
                                'image' => '3.jpg',
                                'description' => 'Mélange unique d\'huiles biologiques pour des massages relaxants.'
                            ],
                            [
                                'id' => 4, 
                                'name' => 'Sérum Revitalisant',
                                'image' => '4.jpg',
                                'description' => 'Concentré d\'actifs anti-âge pour une peau plus ferme et éclatante.'
                            ],
                            [
                                'id' => 5, 
                                'name' => 'Masque Purifiant',
                                'image' => '5.jpg',
                                'description' => 'Masque détoxifiant à l\'argile verte et au charbon actif.'
                            ],
                            [
                                'id' => 6, 
                                'name' => 'Lotion Tonifiante',
                                'image' => '6.jpg',
                                'description' => 'Lotion fraîche et revitalisante aux extraits de plantes.'
                            ],
                            [
                                'id' => 7, 
                                'name' => 'Gommage Exfoliant',
                                'image' => '7.jpg',
                                'description' => 'Exfoliant doux aux particules de bambou et enzymes naturelles.'
                            ],
                            [
                                'id' => 8, 
                                'name' => 'Huile d\'Argan Pure',
                                'image' => '8.jpg',
                                'description' => 'Huile d\'argan 100% pure du Maroc, pressée à froid.'
                            ],
                            [
                                'id' => 9, 
                                'name' => 'Crème Anti-âge',
                                'image' => '9.jpg',
                                'description' => 'Formule avancée anti-rides enrichie en collagène marin.'
                            ],
                            [
                                'id' => 10, 
                                'name' => 'Sérum Éclat',
                                'image' => '10.jpg',
                                'description' => 'Sérum illuminateur à la vitamine C pure.'
                            ],
                            [
                                'id' => 11, 
                                'name' => 'Masque Hydratant',
                                'image' => '11.jpg',
                                'description' => 'Masque nourrissant intense à l\'acide hyaluronique.'
                            ],
                            [
                                'id' => 12, 
                                'name' => 'Huile de Jojoba',
                                'image' => '12.jpg',
                                'description' => 'Huile de jojoba bio aux propriétés équilibrantes.'
                            ],
                            [
                                'id' => 13, 
                                'name' => 'Crème Apaisante',
                                'image' => '13.jpg',
                                'description' => 'Crème calmante pour peaux sensibles à la camomille.'
                            ],
                        ];
                    @endphp

                    @foreach ($materials as $material)
                        <div class="swiper-slide">
                            <div class="materials-item">
                                <div class="materials-card">
                                    <div class="front">
                                        <div class="materials-imgwrap">
                                            <img src="/images/{{ $material['image'] }}" 
                                                 alt="{{ $material['name'] }}" 
                                                 class="materials-img" 
                                                 loading="lazy">
                                        </div>
                                        <div class="materials-overlay">
                                            <h3 class="materials-title">{{ $material['name'] }}</h3>
                                            <p class="materials-description">{{ $material['description'] }}</p>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <h3>{{ $material['name'] }}</h3>
                                        <p>{{ $material['description'] }}</p>
                                        <div class="back-actions">
                                            <button class="back-button">
                                                <i class="fas fa-arrow-left"></i>
                                                Retour
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <a href="{{ route('productClient') }}" class="action-btn">Voir Nos Produits</a>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B5A2B; /* Rich Saddle Brown */
            --secondary-color: #D2B48C; /* Light Tan */
            --dark-color: #2C1A05; /* Darker Espresso */
            --light-color: #FFFFFF; /* Pure White */
            --accent-color: #B89778; /* Warm Mocha */
            --grid-item-ratio: 0.75;
            --grid-item-radius: 15px;
            --grid-gap: 2rem;
            --grid-max-width: 1400px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light-color);
            color: #333;
            line-height: 1.6;
        }

        .navbar {
            background: transparent;
            height: 90px;
            padding: 0 2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
        }

        .navbar.scrolled {
            height: 70px;
            background: var(--secondary-color);
            box-shadow: 0 2px 15px rgba(0,0,0,0.2);
        }

        .navbar-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--light-color);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--light-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-links a:hover:after,
        .nav-links a.active:after {
            width: 100%;
        }

        .hero-container {
            position: relative;
            height: 100vh;
            background-image: url('/images/background.jpeg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            transition: all 0.5s ease;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 0;
        }

        .video-bg.active {
            opacity: 1;
        }

        .hero-container.video-active {
            background-image: none;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            padding: 0 2rem;
            z-index: 2;
        }

        .hero-content h1 {
            color: var(--light-color);
            font-size: 4.5rem;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            color: var(--light-color);
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
        }

        .hero-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border: 2px solid var(--primary-color);
            border-radius: 40px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.2rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            animation: pulseButton 1.5s ease infinite;
            z-index: 3;
        }

        .hero-btn:hover {
            background: var(--primary-color);
            color: var(--light-color);
            border-radius: 50px;
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            animation: none;
        }

        .hero-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            transform: skewX(-25deg);
            transition: left 0.5s ease;
        }

        .hero-btn:hover::before {
            left: 100%;
        }

        .hero-btn .ripple {
            position: absolute;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        .hero-btn:active {
            transform: scale(0.95) translateY(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .gallery-section {
            padding: 5rem 2rem;
            max-width: var(--grid-max-width);
            margin: 0 auto;
            background: var(--light-color);
            border-radius: 15px 15px 0 0;
            margin-bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-header h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--primary-color);
            bottom: -10px;
            left: 25%;
        }

        .section-header p {
            color: #666;
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .filter-btn {
            padding: 0.9rem 2.2rem;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border: 2px solid var(--primary-color);
            border-radius: 40px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: pulseButton 1.5s ease infinite;
        }

        .filter-btn:hover {
            background: var(--primary-color);
            color: var(--light-color);
            border-radius: 50px;
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            animation: none;
        }

        .filter-btn.active {
            background: var(--dark-color);
            color: var(--light-color);
            border-color: var(--dark-color);
            animation: glowActive 1.5s ease-in-out infinite;
        }

        .action-btn {
            display: block;
            padding: 0.9rem 2.2rem;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border: 2px solid var(--primary-color);
            border-radius: 40px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            text-align: center;
            margin: 2rem auto;
            width: fit-content;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: pulseButton 1.5s ease infinite;
        }

        .action-btn:hover {
            background: var(--primary-color);
            color: var(--light-color);
            border-radius: 50px;
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            animation: none;
        }

        /* Shine effect */
        .filter-btn::before,
        .action-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            transform: skewX(-25deg);
            transition: left 0.5s ease;
        }

        .filter-btn:hover::before,
        .action-btn:hover::before {
            left: 100%;
        }

        /* Ripple effect container */
        .filter-btn .ripple,
        .action-btn .ripple {
            position: absolute;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Active state animation */
        .filter-btn:active,
        .action-btn:active {
            transform: scale(0.95) translateY(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        @keyframes pulseButton {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
            50% {
                transform: scale(1.02);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
        }

        @keyframes glowActive {
            0% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
            50% {
                box-shadow: 0 6px 18px rgba(44, 26, 5, 0.4);
            }
            100% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
        }

        .gallery-slider {
            width: 100%;
            max-width: var(--grid-max-width);
            margin: 0 auto;
            padding: 2rem 0;
        }

        .swiper {
            width: 100%;
            height: 500px;
            padding: 10px 0;
        }

        .swiper-slide {
            width: 350px;
            height: 450px;
            margin: 0 5px !important;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
        }

        .swiper-slide-active {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none !important;
        }

        .gallery-item {
            width: 100%;
            height: 100%;
            position: relative;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            perspective: 1000px;
        }

        .gallery-card {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s ease;
        }

        .gallery-card .front,
        .gallery-card .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: var(--grid-item-radius);
            overflow: hidden;
        }

        .gallery-card .front {
            z-index: 2;
        }

        .gallery-card .back {
            transform: rotateY(180deg);
            background: var(--light-color);
            color: var(--dark-color);
            display: flex;
            flex-direction: column;
            padding: 2rem;
            text-align: left;
        }

        .gallery-card .back h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            text-align: left;
        }

        .gallery-card .back p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--dark-color);
            opacity: 0.9;
            flex-grow: 1;
            margin-bottom: 2rem;
        }

        .gallery-card .back .back-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            border-top: 1px solid rgba(0,0,0,0.1);
            padding-top: 1.5rem;
        }

        .gallery-card .back .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--secondary-color);
            color: var(--dark-color);
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-card .back .back-button:hover {
            background: var(--primary-color);
            color: var(--light-color);
            transform: translateY(-2px);
        }

        .gallery-card .back .back-button i {
            font-size: 1.2rem;
        }

        .gallery-imgwrap,
        .materials-imgwrap {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: var(--grid-item-radius);
        }

        .gallery-img,
        .materials-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
            opacity: 1;
            visibility: visible;
        }

        .swiper-slide-active .gallery-img,
        .swiper-slide-active .materials-img {
            transform: scale(1.1);
        }

        .gallery-overlay,
        .materials-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, var(--dark-color), transparent);
            padding: 2rem;
            color: var(--light-color);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 3;
        }

        .swiper-slide-active .gallery-overlay,
        .swiper-slide-active .materials-overlay {
            opacity: 1;
        }

        .gallery-title,
        .materials-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .gallery-category {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--light-color);
            background: var(--primary-color);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            transition: all 0.3s ease;
            z-index: 4;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--accent-color);
            transform: scale(1.1);
        }

        .swiper-pagination-bullet {
            background: var(--light-color);
            opacity: 0.5;
            width: 12px;
            height: 12px;
        }

        .swiper-pagination-bullet-active {
            background: var(--primary-color);
            opacity: 1;
        }

        .featured-images {
            max-width: var(--grid-max-width);
            margin: 3rem auto;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .featured-image-container {
            flex: none;
            width: 500px;
            height: 350px;
            position: relative;
            overflow: hidden;
            border-radius: var(--grid-item-radius);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .featured-image-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .featured-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .featured-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: var(--light-color);
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .featured-image-container:hover .featured-overlay {
            opacity: 1;
        }

        .featured-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
        }

        .materials-section {
            padding: 2rem 2rem 5rem;
            max-width: var(--grid-max-width);
            margin: 0 auto;
            background: var(--light-color);
            border-radius: 0 0 15px 15px;
            margin-top: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .materials-slider {
            width: 100%;
            max-width: var(--grid-max-width);
            margin: 0 auto;
            padding: 2rem 0;
        }

        .materials-swiper {
            width: 100%;
            height: 500px;
            padding: 20px 0;
        }

        .materials-swiper .swiper-slide {
            width: 350px;
            height: 450px;
            margin: 0 10px !important;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .materials-swiper .swiper-slide-active {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .materials-swiper .swiper-slide-shadow-left,
        .materials-swiper .swiper-slide-shadow-right {
            display: none !important;
        }

        .materials-swiper .swiper-pagination {
            bottom: 10px !important;
        }

        .materials-swiper .swiper-pagination-bullet {
            background: var(--light-color);
            opacity: 0.5;
            width: 12px;
            height: 12px;
        }

        .materials-swiper .swiper-pagination-bullet-active {
            background: var(--primary-color);
            opacity: 1;
        }

        .materials-swiper .swiper-button-next,
        .materials-swiper .swiper-button-prev {
            color: var(--light-color);
            background: var(--primary-color);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            transition: all 0.3s ease;
            z-index: 4;
        }

        .materials-swiper .swiper-button-next:hover,
        .materials-swiper .swiper-button-prev:hover {
            background: var(--accent-color);
            transform: scale(1.1);
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .featured-image-container {
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
        }

        .featured-image-container:nth-child(1) {
            animation-delay: 0.2s;
        }

        .footer {
            background: var(--secondary-color);
            color: var(--dark-color);
            padding: 5rem 2rem 2rem;
            margin-top: 5rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-logo:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
        }

        .footer-about p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-link i {
            color: var(--primary-color);
        }

        .social-link:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-heading {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .footer-heading:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
            list-style: none;
        }

        .footer-links a {
            color: var(--dark-color);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-contact i {
            margin-right: 1rem;
            color: var(--primary-color);
            width: 20px;
            text-align: center;
        }

        .copyright {
            text-align: center;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(0,0,0,0.1);
        }

        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            background: none !important;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
            z-index: 1;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        @media (max-width: 1200px) {
            .featured-image-container {
                width: 450px;
                height: 300px;
            }
        }

        @media (max-width: 992px) {
            .featured-images {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            
            .featured-image-container {
                width: 100%;
                max-width: 500px;
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                height: 80px;
                padding: 0 1.5rem;
            }
            
            .hero-container {
                height: 60vh;
                background-position: center;
            }

            .video-bg {
                height: 60vh;
                object-fit: cover;
            }

            .hero-content {
                width: 90%;
                padding: 0 15px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
                margin-bottom: 1rem;
            }

            .hero-content p {
                font-size: 1.1rem;
                margin-bottom: 1.5rem;
                padding: 0 10px;
            }
            
            .nav-links {
                gap: 1rem;
            }
            
            .logo {
                font-size: 1.5rem;
            }
            
            .logo img {
                height: 35px;
            }

            .swiper,
            .materials-swiper {
                height: 400px;
            }
            
            .swiper-slide,
            .materials-swiper .swiper-slide {
                width: 280px;
                height: 380px;
            }

            .gallery-overlay,
            .materials-overlay {
                padding: 1rem;
            }

            .gallery-title,
            .materials-title {
                font-size: 1.2rem;
            }

            .featured-images {
                flex-direction: column;
                align-items: center;
            }
            
            .featured-image-container {
                width: 100%;
            }

            .featured-image {
                height: 300px;
            }

            .hero-btn {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-container {
                height: 50vh;
            }

            .video-bg {
                height: 50vh;
            }

            .hero-content {
                width: 95%;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }

        @media (orientation: landscape) and (max-height: 500px) {
            .hero-container {
                height: 100vh;
            }

            .video-bg {
                height: 100vh;
            }

            .hero-content {
                padding-top: 3rem;
            }

            .hero-content h1 {
                font-size: 1.8rem;
                margin-bottom: 0.5rem;
            }

            .hero-content p {
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }
        }

        .materials-description {
            color: var(--light-color);
            font-size: 0.9rem;
            margin-top: 0.5rem;
            opacity: 0.8;
        }

        .materials-overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.4));
            padding: 1.5rem;
        }

        .materials-img {
            transition: transform 0.6s ease;
        }

        .swiper-slide-active .materials-img {
            transform: scale(1.1);
        }

        .materials-swiper .swiper-pagination {
            position: relative;
            margin-top: 20px;
        }

        .back-description {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--dark-color);
            margin: 1.5rem 0;
            padding: 0 1rem;
        }

        .back-details {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 1rem;
            border-top: 1px solid rgba(0,0,0,0.1);
            margin-top: auto;
        }

        .material-number {
            color: var(--primary-color);
            font-weight: 600;
        }

        .material-category {
            color: var(--accent-color);
            font-style: italic;
        }

        .materials-imgwrap {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: var(--grid-item-radius);
            position: relative;
        }

        .materials-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
            opacity: 1;
            visibility: visible;
        }

        .materials-item {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: var(--grid-item-radius);
        }

        .materials-swiper .swiper-slide {
            width: 350px;
            height: 450px;
            margin: 0 10px !important;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .materials-card {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s ease;
        }

        .materials-card .front,
        .materials-card .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: var(--grid-item-radius);
            overflow: hidden;
        }

        .materials-card .front {
            z-index: 2;
        }

        .materials-card .back {
            transform: rotateY(180deg);
            background: var(--light-color);
            color: var(--dark-color);
            display: flex;
            flex-direction: column;
            padding: 2rem;
            text-align: left;
        }

        .materials-card .back h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            text-align: left;
        }

        .materials-card .back p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--dark-color);
            opacity: 0.9;
            flex-grow: 1;
            margin-bottom: 2rem;
        }

        .materials-card .back .back-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            border-top: 1px solid rgba(0,0,0,0.1);
            padding-top: 1.5rem;
        }

        .materials-card .back .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--secondary-color);
            color: var(--dark-color);
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .materials-card .back .back-button:hover {
            background: var(--primary-color);
            color: var(--light-color);
            transform: translateY(-2px);
        }

        .materials-card .back .back-button i {
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Initialize Swiper for gallery
        const swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: -30,
                depth: 50,
                modifier: 2,
                slideShadows: false
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        // Initialize Materials Swiper
        const materialsSwiper = new Swiper('.materials-swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: -30,
                depth: 50,
                modifier: 2,
                slideShadows: false
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: '.materials-swiper .swiper-button-next',
                prevEl: '.materials-swiper .swiper-button-prev'
            }
        });

        // Card flip functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Handle gallery card flips
            const galleryCards = document.querySelectorAll('.gallery-card');
            galleryCards.forEach(card => {
                const backButton = card.querySelector('.back-button');
                if (backButton) {
                    backButton.addEventListener('click', () => {
                        card.style.transform = 'rotateY(0deg)';
                    });
                }
            });

            // Handle materials card flips
            const materialsCards = document.querySelectorAll('.materials-card');
            materialsCards.forEach(card => {
                const backButton = card.querySelector('.back-button');
                if (backButton) {
                    backButton.addEventListener('click', () => {
                        card.style.transform = 'rotateY(0deg)';
                    });
                }
            });

            // Pause autoplay when card is flipped
            const handleCardFlip = (card, swiper) => {
                if (card.style.transform === 'rotateY(180deg)') {
                    swiper.autoplay.stop();
                } else {
                    swiper.autoplay.start();
                }
            };

            // Add click listeners for front of cards
            document.querySelectorAll('.gallery-overlay').forEach(overlay => {
                overlay.addEventListener('click', (e) => {
                    const card = e.target.closest('.gallery-card');
                    if (card) {
                        card.style.transform = 'rotateY(180deg)';
                        handleCardFlip(card, swiper);
                    }
                });
            });

            document.querySelectorAll('.materials-overlay').forEach(overlay => {
                overlay.addEventListener('click', (e) => {
                    const card = e.target.closest('.materials-card');
                    if (card) {
                        card.style.transform = 'rotateY(180deg)';
                        handleCardFlip(card, materialsSwiper);
                    }
                });
            });

            // Reset all cards when slide changes
            swiper.on('slideChange', () => {
                document.querySelectorAll('.gallery-card').forEach(card => {
                    card.style.transform = 'rotateY(0deg)';
                });
                swiper.autoplay.start();
            });

            materialsSwiper.on('slideChange', () => {
                document.querySelectorAll('.materials-card').forEach(card => {
                    card.style.transform = 'rotateY(0deg)';
                });
                materialsSwiper.autoplay.start();
            });
        });

        // Video background logic
        document.addEventListener('DOMContentLoaded', function() {
            const heroContainer = document.querySelector('.hero-container');
            const video = document.getElementById('background-video');
            const womenBtn = document.querySelector('a[href*="women"]');
            const menBtn = document.querySelector('a[href*="men"]');
            const allBtn = document.querySelector('a[href*="all"]');

            function activateVideo(videoSrc) {
                video.src = videoSrc;
                video.load();
                video.play();
                video.classList.add('active');
                heroContainer.classList.add('video-active');
            }

            function deactivateVideo() {
                video.classList.remove('active');
                heroContainer.classList.remove('video-active');
                video.src = '';
            }

            womenBtn.addEventListener('click', function() {
                activateVideo('/images/newvideo.mp4');
            });

            menBtn.addEventListener('click', function() {
                activateVideo('/images/vidoe-men.mp4');
            });

            allBtn.addEventListener('click', function() {
                deactivateVideo();
            });

            // Set initial video based on current filter
            const currentGender = '{{ $gender }}';
            if (currentGender === 'women') {
                activateVideo('/images/newvideo.mp4');
            } else if (currentGender === 'men') {
                activateVideo('/images/vidoe-men.mp4');
            }
        });
    </script>
@endsection
<script>
     function showMoreProducts() {
            const hiddenProducts = document.querySelectorAll('.more-products');
            hiddenProducts.forEach((product, index) => {
                setTimeout(() => {
                    product.classList.remove('hidden');
                    product.classList.add('animate-fadeIn');
                }, index * 100);
            });
            
            const button = event.target;
            button.classList.add('opacity-0', 'transition-opacity', 'duration-300');
            setTimeout(() => {
                button.style.display = 'none';
            }, 300);
        }
        
        function flipCard(button) {
            const card = button.closest('.flip-card');
            
            // Prevent multiple clicks during animation
            if (card.classList.contains('animating')) {
                return;
            }
            
            card.classList.add('animating');
            card.classList.toggle('flipped');
            
            // Remove animating class after transition completes
            setTimeout(() => {
                card.classList.remove('animating');
            }, 700); // Match the transition duration
            
            // Close other cards
            document.querySelectorAll('.flip-card').forEach(otherCard => {
                if (otherCard !== card && otherCard.classList.contains('flipped')) {
                    otherCard.classList.add('animating');
                    otherCard.classList.remove('flipped');
                    setTimeout(() => {
                        otherCard.classList.remove('animating');
                    }, 700);
                }
            });
        }

        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fadeIn {
                animation: fadeIn 0.5s ease-out forwards;
            }
        `;
        document.head.appendChild(style);

        document.addEventListener('DOMContentLoaded', function() {
            initializeCart();
            updateCartCount();
        });

        function loadMoreProducts(button) {
            const page = button.dataset.page;
            const container = document.getElementById('products-container');
            const currentUrl = new URL(window.location.href);
            
            currentUrl.searchParams.set('page', page);

            fetch(currentUrl.toString(), {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Parse the HTML string into DOM elements
                const tempContainer = document.createElement('div');
                tempContainer.innerHTML = data.html;
                
                // Add each new product card to the container
                const newCards = tempContainer.children;
                Array.from(newCards).forEach(card => {
                    container.appendChild(card);
                });
                
                if (data.hasMore) {
                    button.dataset.page = parseInt(page) + 1;
                } else {
                    button.style.display = 'none';
                }
            });
        }

        function initializeCart() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            
            if (!localStorage.getItem(cartKey)) {
                localStorage.setItem(cartKey, JSON.stringify({}));
            }
        }

        function addToCart(productId, productName, productPrice, productImage = null) {
            @if(!auth()->check())
                window.location.href = "{{ route('login') }}";
                return;
            @endif

            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            
            if (cart[productId]) {
                cart[productId].quantity += 1;
            } else {
                cart[productId] = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                };
            }
            
            localStorage.setItem(cartKey, JSON.stringify(cart));
            updateCartCount();
            showNotification(`${productName} added to cart!`);
        }

        function updateCartCount() {
            let userId = "{{ auth()->id() ?? 'guest' }}";
            let cartKey = `cart_${userId}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || {};
            let totalItems = 0;
            
            for (let productId in cart) {
                totalItems += cart[productId].quantity;
            }
            
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = totalItems;
            }
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-teal-600 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-10 opacity-0 transition-all duration-300';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.remove('translate-y-10', 'opacity-0');
                notification.classList.add('translate-y-0', 'opacity-100');
            }, 10);
            
            setTimeout(() => {
                notification.classList.remove('translate-y-0', 'opacity-100');
                notification.classList.add('translate-y-10', 'opacity-0');
                
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }
</script>