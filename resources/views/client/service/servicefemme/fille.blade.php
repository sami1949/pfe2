@extends('layouts.service')

@section('title', 'Services pour Filles - Elegance Vibe')

@section('content')
<style>
    .service-header {
        background: linear-gradient(rgba(139, 74, 43, 0.4), rgba(139, 74, 43, 0.4)),
                    url('/images/filles-header.jpg') center/cover no-repeat;
        background-size: cover;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ffffff;
        background-attachment: fixed;
    }

    .service-header h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        color: #ffffff;
    }

    .service-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        color: #ffffff;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        max-width: 1400px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .service-item {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s;
        position: relative;
    }

    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .service-item img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        object-position: center;
        transition: all 0.4s ease;
    }

    .service-item:hover img {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .service-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: #ff6b6b;
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
        z-index: 2;
    }

    .service-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: rgba(139, 74, 43, 0.9);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        z-index: 2;
    }

    .service-content {
        padding: 20px;
    }

    .service-content h3 {
        color: #8b4a2b;
        font-size: 1.4rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .service-content h3 i {
        color: #ff9966;
    }

    .service-content p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
        min-height: 60px;
    }

    .service-features {
        margin-bottom: 20px;
    }

    .service-features li {
        list-style: none;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #555;
        font-size: 0.9rem;
    }

    .service-features i {
        color: #8b4a2b;
        font-size: 0.8rem;
        min-width: 18px;
    }

    .service-price {
        font-weight: bold;
        color: #ff9966;
        font-size: 1.3rem;
        margin-bottom: 20px;
        text-align: right;
    }

    .btn-reserver {
        display: inline-block;
        background-color: #8b4a2b;
        color: white;
        padding: 12px 25px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s;
        width: 100%;
        text-align: center;
        border: 2px solid #8b4a2b;
        font-size: 0.95rem;
    }

    .btn-reserver:hover {
        background-color: transparent;
        color: #8b4a2b;
    }

    .service-duration {
        font-size: 0.85rem;
        color: #888;
        margin-top: 5px;
        display: block;
        font-style: italic;
    }

    @media (max-width: 768px) {
        .service-header {
            height: 300px;
            padding-top: 100px;
        }
        
        .service-header h1 {
            font-size: 2rem;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
        }
        
        .service-item img {
            height: 220px;
        }
    }

    @media (max-width: 480px) {
        .service-header h1 {
            font-size: 1.8rem;
        }

        .service-header p {
            font-size: 1rem;
            padding: 0 1rem;
        }
    }
</style>

<div class="service-header">
    <div>
        <h1>Services pour Filles</h1>
        <p class="service-description">
            Des soins adaptés et ludiques pour les jeunes filles, dans une ambiance douce et rassurante.
        </p>
    </div>
</div>

<div class="services-grid">
    <!-- Service 1 - Coiffure Princesse -->
    <div class="service-item" data-category="coiffure">
        <img src="{{ asset('images/coiffure-princesse.jpg') }}" alt="Coiffure princesse pour fille">
        <div class="service-badge">Populaire</div>
        <div class="service-icon">
            <i class="fas fa-heart"></i>
        </div>
        <div class="service-content">
            <h3><i class="fas fa-heart"></i> Coiffure Princesse</h3>
            <p>Coiffures adaptées aux jeunes filles avec des accessoires colorés.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Coupe adaptée</li>
                <li><i class="fas fa-check"></i> Coiffure festive</li>
                <li><i class="fas fa-check"></i> Accessoires inclus</li>
                <li><i class="fas fa-check"></i> Produits doux</li>
            </ul>
            <div class="service-price">35€ <span class="service-duration">(45min)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 2 - Mini Manucure -->
    <div class="service-item" data-category="soin">
        <img src="{{ asset('images/mini-manucure.jpg') }}" alt="Mini manucure pour fille">
        <div class="service-badge">Nouveau</div>
        <div class="service-icon">
            <i class="fas fa-star"></i>
        </div>
        <div class="service-content">
            <h3><i class="fas fa-star"></i> Mini Manucure</h3>
            <p>Soin des mains doux avec vernis adapté aux enfants.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Soin doux</li>
                <li><i class="fas fa-check"></i> Vernis enfant</li>
                <li><i class="fas fa-check"></i> Décorations</li>
                <li><i class="fas fa-check"></i> Sans produits agressifs</li>
            </ul>
            <div class="service-price">25€ <span class="service-duration">(30min)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 3 - Forfait Anniversaire -->
    <div class="service-item" data-category="special">
        <img src="{{ asset('images/anniversaire-filles.jpg') }}" alt="Forfait anniversaire pour filles">
        <div class="service-badge">Événement</div>
        <div class="service-icon">
            <i class="fas fa-birthday-cake"></i>
        </div>
        <div class="service-content">
            <h3><i class="fas fa-birthday-cake"></i> Forfait Anniversaire</h3>
            <p>Une expérience beauté inoubliable pour un anniversaire spécial.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Mini soins</li>
                <li><i class="fas fa-check"></i> Coiffure festive</li>
                <li><i class="fas fa-check"></i> Maquillage léger</li>
                <li><i class="fas fa-check"></i> Cadeau souvenir</li>
                <li><i class="fas fa-check"></i> Pour 4 filles</li>
            </ul>
            <div class="service-price">120€ <span class="service-duration">(2h)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 4 - Maquillage Fée -->
    <div class="service-item" data-category="maquillage">
        <img src="{{ asset('images/maquillage-fee.jpg') }}" alt="Maquillage féerique pour fille">
        <div class="service-icon">
            <i class="fas fa-magic"></i>
        </div>
        <div class="service-content">
            <h3><i class="fas fa-fairy"></i> Maquillage Féerique</h3>
            <p>Maquillage artistique et hypoallergénique pour les petites fées.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Produits spécial enfants</li>
                <li><i class="fas fa-check"></i> Thème au choix</li>
                <li><i class="fas fa-check"></i> Démaquillage facile</li>
            </ul>
            <div class="service-price">20€ <span class="service-duration">(30min)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 5 - Soin Bulle -->
    <div class="service-item" data-category="soin">
        <img src="{{ asset('images/soin-bulle.jpg') }}" alt="Soin bulle pour fille">
        <div class="service-icon">
            <i class="fas fa-bath"></i>
        </div>
        <div class="service-content">
            <h3><i class="fas fa-bubbles"></i> Soin Bulle</h3>
            <p>Soin du visage ludique et doux spécialement conçu pour les enfants.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Produits bio</li>
                <li><i class="fas fa-check"></i> Moment détente</li>
                <li><i class="fas fa-check"></i> Hydratation douce</li>
            </ul>
            <div class="service-price">30€ <span class="service-duration">(40min)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>
</div>
@endsection