
<style>
  .service-header {
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                url('/images/voilee-header.jpg') center/cover no-repeat;
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
      <h1>Services pour Femmes Voilées</h1>
      <p>Un espace dédié et privé pour les femmes voilées, garantissant intimité et respect total de vos valeurs.</p>
    </div>
</div>

<div class="services-grid">
    <!-- Service 1 -->
    <div class="service-item" data-category="coiffure">
        <img src="{{ asset('images/coiffure-voilee.jpg') }}" alt="Coiffure en privé pour femmes voilées">
        <div class="service-content">
            <h3><i class="fas fa-cut"></i> Coiffure en Privé</h3>
            <p>Soins capillaires et coupe dans un espace totalement privé.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Espace fermé et discret</li>
                <li><i class="fas fa-check"></i> Personnel féminin uniquement</li>
                <li><i class="fas fa-check"></i> Soins professionnels</li>
            </ul>
            <div class="service-price">75€ <span class="service-duration">(1h)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 2 -->
    <div class="service-item" data-category="soin">
        <img src="{{ asset('images/soin-voilee.jpg') }}" alt="Soins du visage pour femmes voilées">
        <div class="service-content">
            <h3><i class="fas fa-spa"></i> Soins du Visage</h3>
            <p>Soins du visage adaptés dans le respect de votre intimité.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Cabine individuelle</li>
                <li><i class="fas fa-check"></i> Produits halal</li>
                <li><i class="fas fa-check"></i> Conseils personnalisés</li>
            </ul>
            <div class="service-price">85€ <span class="service-duration">(1h15)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- Service 3 -->
    <div class="service-item" data-category="mariage">
        <img src="{{ asset('images/mariage-voilee.jpg') }}" alt="Forfait mariage pour femmes voilées">
        <div class="service-content">
            <h3><i class="fas fa-ring"></i> Forfait Mariage</h3>
            <p>Préparation complète pour votre grand jour en toute intimité.</p>
            <ul class="service-features">
                <li><i class="fas fa-check"></i> Maquillage</li>
                <li><i class="fas fa-check"></i> Coiffure</li>
                <li><i class="fas fa-check"></i> Soins complets</li>
            </ul>
            <div class="service-price">350€ <span class="service-duration">(4h)</span></div>
            <a href="#" class="btn-reserver">Réserver</a>
        </div>
    </div>
</div>

