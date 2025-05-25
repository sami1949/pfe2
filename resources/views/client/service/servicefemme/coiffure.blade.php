<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EleganceVibe - Coiffure</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }
    
    body {
      background-color: #f8f6f4;
      color: #333;
      line-height: 1.6;
    }
    
    header {
      background: white;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #8b4a2b;
    }
    
    .hero {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                  url('https://via.placeholder.com/1920x600') center/cover;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }
    
    .category {
      margin-bottom: 3rem;
    }
    
    .category-title {
      color: #8b4a2b;
      font-size: 1.8rem;
      text-align: center;
      margin: 2rem 0;
      position: relative;
    }
    
    .category-title:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: #8b4a2b;
    }
    
    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
    }
    
    .service {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    
    .service:hover {
      transform: translateY(-5px);
    }
    
    .service img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    
    .service-content {
      padding: 1.5rem;
    }
    
    .service h3 {
      color: #8b4a2b;
      margin-bottom: 0.5rem;
      font-size: 1.3rem;
    }
    
    .service p {
      color: #666;
      margin-bottom: 1rem;
    }
    
    .service-features {
      margin: 1rem 0;
      list-style: none;
    }
    
    .service-features li {
      margin-bottom: 0.3rem;
      display: flex;
      align-items: center;
    }
    
    .service-features i {
      color: #8b4a2b;
      margin-right: 0.5rem;
      font-size: 0.8rem;
    }
    
    .price {
      font-size: 1.3rem;
      color: #ff9966;
      font-weight: bold;
      margin: 1rem 0;
    }
    
    .btn {
      display: block;
      background: #8b4a2b;
      color: white;
      text-align: center;
      padding: 0.8rem;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }
    
    .btn:hover {
      background: #6b3a20;
    }
    
    @media (max-width: 768px) {
      .services {
        grid-template-columns: 1fr;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">EleganceVibe</div>
  </header>
  
  <section class="hero">
    <div>
      <h1>Nos Services de Coiffure</h1>
      <p>Découvrez notre expertise en 5 catégories essentielles</p>
    </div>
  </section>
  
  <div class="container">
    <!-- Catégorie 1 : Coupes -->
    <section class="category">
      <h2 class="category-title">Coupes de Cheveux</h2>
      <div class="services">
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Coupe Femme">
          <div class="service-content">
            <h3>Coupe Femme</h3>
            <p>Coupe personnalisée selon votre morphologie et style de vie.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Conseils personnalisés</li>
              <li><i class="fas fa-check"></i> Brushing inclus</li>
            </ul>
            <div class="price">65€ <small>(1h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Coupe Homme">
          <div class="service-content">
            <h3>Coupe Homme</h3>
            <p>Coupe masculine précise avec finition au rasoir.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Taille-barbe optionnelle</li>
              <li><i class="fas fa-check"></i> Produits fixants</li>
            </ul>
            <div class="price">35€ <small>(45min)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Coupe Enfant">
          <div class="service-content">
            <h3>Coupe Enfant</h3>
            <p>Coupe adaptée aux plus jeunes dans une ambiance détendue.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Environnement ludique</li>
              <li><i class="fas fa-check"></i> Tarif spécial</li>
            </ul>
            <div class="price">25€ <small>(30min)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Catégorie 2 : Colorations -->
    <section class="category">
      <h2 class="category-title">Colorations</h2>
      <div class="services">
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Coloration complète">
          <div class="service-content">
            <h3>Coloration complète</h3>
            <p>Teinture permanente pour un résultat uniforme et durable.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Soin post-coloration</li>
              <li><i class="fas fa-check"></i> Palette complète</li>
            </ul>
            <div class="price">80€ <small>(2h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Balayage">
          <div class="service-content">
            <h3>Balayage</h3>
            <p>Effet soleil naturel avec peu d'entretien.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Adapté à votre base</li>
              <li><i class="fas fa-check"></i> Résultat progressif</li>
            </ul>
            <div class="price">120€ <small>(3h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Mèches">
          <div class="service-content">
            <h3>Mèches</h3>
            <p>Éclaircissement sélectif pour un effet lumineux.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Techniques variées</li>
              <li><i class="fas fa-check"></i> Protection capillaire</li>
            </ul>
            <div class="price">90€ <small>(2h30)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Catégorie 3 : Soins -->
    <section class="category">
      <h2 class="category-title">Soins Capillaires</h2>
      <div class="services">
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Soin kératine">
          <div class="service-content">
            <h3>Soin kératine</h3>
            <p>Réparation intensive pour cheveux abîmés.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Effet 3 mois</li>
              <li><i class="fas fa-check"></i> Brillance immédiate</li>
            </ul>
            <div class="price">150€ <small>(2h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Masque nutritif">
          <div class="service-content">
            <h3>Masque nutritif</h3>
            <p>Nourriture intense pour cheveux secs.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Huiles végétales</li>
              <li><i class="fas fa-check"></i> Application chaude</li>
            </ul>
            <div class="price">60€ <small>(1h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Détox cuir chevelu">
          <div class="service-content">
            <h3>Détox cuir chevelu</h3>
            <p>Purification et stimulation de la pousse.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Gommage doux</li>
              <li><i class="fas fa-check"></i> Lotions actives</li>
            </ul>
            <div class="price">50€ <small>(45min)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Catégorie 4 : Lissages -->
    <section class="category">
      <h2 class="category-title">Lissages</h2>
      <div class="services">
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Lissage brésilien">
          <div class="service-content">
            <h3>Lissage brésilien</h3>
            <p>Lissage semi-permanent sans formol.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Effet 3-4 mois</li>
              <li><i class="fas fa-check"></i> Hydratation intense</li>
            </ul>
            <div class="price">180€ <small>(3h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Lissage japonais">
          <div class="service-content">
            <h3>Lissage japonais</h3>
            <p>Lissage permanent pour cheveux bouclés.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Résistant à l'humidité</li>
              <li><i class="fas fa-check"></i> Durée 6-8 mois</li>
            </ul>
            <div class="price">250€ <small>(4h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Lissage coréen">
          <div class="service-content">
            <h3>Lissage coréen</h3>
            <p>Effet lisse naturel sans rigidité.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Formule douce</li>
              <li><i class="fas fa-check"></i> Respect du cheveu</li>
            </ul>
            <div class="price">200€ <small>(3h30)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Catégorie 5 : Événementiel -->
    <section class="category">
      <h2 class="category-title">Coiffures Événementielles</h2>
      <div class="services">
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Chignon mariée">
          <div class="service-content">
            <h3>Chignon mariée</h3>
            <p>Création sur-mesure pour votre jour J.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Essayage préalable</li>
              <li><i class="fas fa-check"></i> Accessoires inclus</li>
            </ul>
            <div class="price">150€ <small>(2h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Coiffure soirée">
          <div class="service-content">
            <h3>Coiffure soirée</h3>
            <p>Style glamour pour occasions spéciales.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Fixation longue durée</li>
              <li><i class="fas fa-check"></i> Produits résistants</li>
            </ul>
            <div class="price">90€ <small>(1h30)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
        
        <div class="service">
          <img src="https://via.placeholder.com/400x300" alt="Tresses africaines">
          <div class="service-content">
            <h3>Tresses africaines</h3>
            <p>Styles traditionnels ou modernes.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Techniques variées</li>
              <li><i class="fas fa-check"></i> Protection capillaire</li>
            </ul>
            <div class="price">120€ <small>(3h)</small></div>
            <a href="#" class="btn">Réserver</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  @include('layouts.footer')
</body>
</html>