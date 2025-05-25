<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Services de maquillage professionnel par EleganceVibe. Découvrez nos prestations pour mariage, soirée, maquillage de jour et bien plus.">
  <title>Maquillage Professionnel - EleganceVibe</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --primary: #f59e0b;  /* Ambre pour les boutons */
  --secondary: #92400e; /* Ambre foncé */
  --dark: #1f2937;     /* Gris foncé */
  --light: #fffbeb;    /* Ambre très clair pour arrière-plan */
  --accent: #d97706;   /* Ambre accent */
  --text: #374151;     /* Gris foncé pour le texte */
  --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

body {
  font-family: 'Arial', sans-serif;
  background-color: var(--light);
  color: var(--text);
  line-height: 1.6;
}

.service-header {
  background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
     url('/images/bbdc.jpg') center/cover no-repeat;
      background-size: cover;
      height: 90vh;
      width: 100%;
      max-width: 100vw;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #ffffff;
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      position: relative;
      left: 0;
      right: 0;
}

.service-header h1 {
  font-size: 3rem;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  color: #ffffff;
  font-family: 'Playfair Display', serif;
}

.service-header p {
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
  color: #ffffff;
}

.service-container {
  max-width: 100%;
  margin: 50px auto;
  padding: 0;
}

.service-intro {
  text-align: center;
  margin-bottom: 50px;
}

.service-intro h2 {
  color: var(--secondary);
  font-size: 2.5rem;
  margin-bottom: 15px;
  font-family: 'Playfair Display', serif;
}

.service-intro p {
  color: var(--text);
  line-height: 1.6;
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

.service-categories {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 15px;
  margin-bottom: 40px;
}

.category-btn {
  padding: 10px 25px;
  background: var(--light);
  border: none;
  border-radius: 30px;
  font-weight: bold;
  color: var(--secondary);
  cursor: pointer;
  transition: var(--transition);
}

.category-btn.active, .category-btn:hover {
  background: var(--primary);
  color: white;
  transform: translateY(-2px);
}

.service-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.service-item {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  transition: var(--transition);
  position: relative;
  height: auto;
  border: 1px solid rgba(245, 158, 11, 0.2);
}

.service-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(245, 158, 11, 0.12);
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
  color: var(--secondary);
  font-size: 1.4rem;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-family: 'Playfair Display', serif;
}

.service-content h3 i {
  color: var(--primary);
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
  color: var(--primary);
  font-size: 1.3rem;
  margin-bottom: 20px;
  text-align: right;
}

.btn-reserver {
  display: inline-block;
  background-color: var(--secondary);
  color: white;
  padding: 12px 25px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: bold;
  transition: var(--transition);
  width: 100%;
  text-align: center;
  border: 2px solid var(--secondary);
  font-size: 0.95rem;
  box-shadow: 0 4px 10px rgba(146, 64, 14, 0.2);
}

.btn-reserver:hover {
  background-color: var(--accent);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(146, 64, 14, 0.3);
}

.service-duration {
  font-size: 0.85rem;
  color: #888;
  margin-top: 5px;
  display: block;
  font-style: italic;
}

.service-category-title {
  font-size: 2rem;
  color: var(--secondary);
  margin: 60px 0 30px;
  text-align: center;
  position: relative;
  font-family: 'Playfair Display', serif;
}

.service-category-title:after {
  content: "";
  display: block;
  width: 100px;
  height: 3px;
  background: var(--primary);
  margin: 15px auto 0;
}

@media (max-width: 768px) {
  .service-header {
    height: 300px;
    margin-top: 0;
    padding-top: 100px;
  }
  
  .service-header h1 {
    font-size: 2rem;
  }
  
  .service-grid {
    grid-template-columns: 1fr;
  }
  
  .service-icon {
    width: 40px;
    height: 40px;
    font-size: 1.2rem;
  }
  
  .service-categories {
    gap: 10px;
  }
  
  .category-btn {
    padding: 8px 15px;
    font-size: 0.9rem;
  }

  .service-intro h2 {
    font-size: 2rem;
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

  .service-category-title {
    font-size: 1.6rem;
  }
}

@media (max-width: 768px) {
  .service-item img {
    height: 220px;
  }
}
  </style>
</head>
<body>
@include('layouts.navigation')

<div class="service-header">
    <div>
      <h1>Maquillage Professionnel</h1>
      <p>Plus de 30 prestations spécialisées pour sublimer votre beauté naturelle</p>
    </div>
</div>

<div class="service-container">
    <div class="service-intro">
      <h2>Notre Expertise en Maquillage</h2>
      <p>Nos artistes maquilleurs certifiés utilisent exclusivement des produits haut de gamme adaptés à tous les types de peau. Découvrez notre gamme complète de services personnalisés.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="jour">Jour</button>
      <button class="category-btn" data-category="soiree">Soirée</button>
      <button class="category-btn" data-category="special">Événements spéciaux</button>
      <button class="category-btn" data-category="traditionnel">Fiançailles</button>
      <button class="category-btn" data-category="halloween">Halloween</button>
    </div>

    <!-- Catégorie Maquillage de Jour -->
    <h3 class="service-category-title">Maquillage de Jour</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <!-- Service 2 -->
      <div class="service-item" data-category="jour">
        <div class="service-badge">Populaire</div>
        <div class="service-icon">
          <i class="fas fa-sun"></i>
        </div>
        <img src="{{ asset('images/naturelle1.jpg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-leaf"></i> Look Naturel</h3>
          <p>Maquillage léger et frais pour un effet "sans maquillage" qui sublime vos traits naturels.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Teint frais et uniforme</li>
            <li><i class="fas fa-check"></i> Produits légers et respirants</li>
            <li><i class="fas fa-check"></i> Tenue toute la journée</li>
          </ul>
          <div class="service-price">50€ <span class="service-duration">(45min de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>



      <!-- Service 2 -->
      <div class="service-item" data-category="jour">
        <div class="service-icon">
          <i class="fas fa-briefcase"></i>
        </div><img src="{{ asset('images/PRO.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-user-tie"></i> Professionnel</h3>
          <p>Look sophistiqué et discret parfait pour le milieu professionnel ou les rendez-vous.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Teint impeccable</li>
            <li><i class="fas fa-check"></i> Contouring discret</li>
            <li><i class="fas fa-check"></i> Résistant aux conditions de bureau</li>
          </ul>
          <div class="service-price">55€ <span class="service-duration">(1h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="service-item" data-category="jour">
        <div class="service-badge">Express</div>
        <div class="service-icon">
          <i class="fas fa-stopwatch"></i>
        </div>
        <img src="{{ asset('images/EXPRESS.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-bolt"></i> Express (20-30min)</h3>
          <p>Service rapide pour une beauté instantanée quand le temps est limité.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Correction rapide du teint</li>
            <li><i class="fas fa-check"></i> Mascara et touche de blush</li>
            <li><i class="fas fa-check"></i> Lèvres nude ou rosées</li>
          </ul>
          <div class="service-price">35€ <span class="service-duration">(30min max)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="service-item" data-category="jour">
        <div class="service-icon">
          <i class="fas fa-umbrella-beach"></i>
        </div>
        <img src="{{ asset('images/ETE.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-sun"></i> Maquillage d'Été</h3>
          <p>Maquillage résistant à la chaleur et à l'humidité, parfait pour les journées ensoleillées.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Résistant à l'eau</li>
            <li><i class="fas fa-check"></i> Protection SPF intégrée</li>
            <li><i class="fas fa-check"></i> Teint frais toute la journée</li>
          </ul>
          <div class="service-price">60€ <span class="service-duration">(1h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Maquillage de Soirée -->
    <h3 class="service-category-title">Maquillage de Soirée</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="soiree">
        <div class="service-badge">Populaire</div>
        <div class="service-icon">
          <i class="fas fa-moon"></i>
        </div>
        <img src="{{ asset('images/SMOKEYY.jpg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-eye"></i> Smokey Eyes</h3>
          <p>Look intense et mystérieux avec un dégradé parfait de fumeux pour des yeux hypnotiques.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Adapté à la forme des yeux</li>
            <li><i class="fas fa-check"></i> Palette professionnelle</li>
            <li><i class="fas fa-check"></i> Tenue 10h minimum</li>
          </ul>
          <div class="service-price">65€ <span class="service-duration">(1h15 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="soiree">
        <div class="service-icon">
          <i class="fas fa-sparkles"></i>
        </div>
        <img src="{{ asset('images/PIL.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-star"></i> Paillettes & Glamour</h3>
          <p>Maquillage étincelant avec des paillettes professionnelles pour un effet lumière maximale.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Paillettes biodégradables</li>
            <li><i class="fas fa-check"></i> Application sécurisée</li>
            <li><i class="fas fa-check"></i> Démaquillage facile</li>
          </ul>
          <div class="service-price">70€ <span class="service-duration">(1h30 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="service-item" data-category="soiree">
        <div class="service-badge">Nouveau</div>
        <div class="service-icon">
          <i class="fas fa-magic"></i>
        </div>
        <img src="{{ asset('images/METALIQUE.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-paint-roller"></i> Effet Métallique</h3>
          <p>Finis chrome et métallisés pour un look avant-gardiste et haute couture.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Pigments haute tenue</li>
            <li><i class="fas fa-check"></i> Effet miroir garanti</li>
            <li><i class="fas fa-check"></i> Sans transfert</li>
          </ul>
          <div class="service-price">75€ <span class="service-duration">(1h30 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="service-item" data-category="soiree">
        <div class="service-icon">
          <i class="fas fa-palette"></i>
        </div>
        <img src="{{ asset('images/COLOR.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-brush"></i> Look Coloré</h3>
          <p>Maquillage artistique avec des couleurs vives pour une soirée festive et originale.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Couleurs vibrantes</li>
            <li><i class="fas fa-check"></i> Tenue longue durée</li>
            <li><i class="fas fa-check"></i> Adapté à votre style</li>
          </ul>
          <div class="service-price">80€ <span class="service-duration">(1h45 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

   
        <!-- Catégorie Événements Spéciaux -->
    <h3 class="service-category-title">Événements Spéciaux</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="special">
        <div class="service-badge">Nouveau</div>
        <div class="service-icon">
          <i class="fas fa-theater-masks"></i>
        </div>
        <img src="{{ asset('images/SCENE.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-mask"></i> Maquillage de Scène</h3>
          <p>Maquillage intensifié pour être visible de loin, idéal pour spectacles et représentations.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Couleurs saturées</li>
            <li><i class="fas fa-check"></i> Résistant aux projecteurs</li>
            <li><i class="fas fa-check"></i> Tenue extrême</li>
          </ul>
          <div class="service-price">85€ <span class="service-duration">(1h45 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="special">
        <div class="service-icon">
          <i class="fas fa-birthday-cake"></i>
        </div>
        <img src="{{ asset('images/ANNIVE.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-gift"></i> Anniversaire VIP</h3>
          <p>Maquillage festif et personnalisé pour célébrer votre anniversaire en beauté.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Thème personnalisé</li>
            <li><i class="fas fa-check"></i> Paillettes optionnelles</li>
            <li><i class="fas fa-check"></i> Service à domicile</li>
          </ul>
          <div class="service-price">75€ <span class="service-duration">(1h30 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="service-item" data-category="special">
        <div class="service-icon">
          <i class="fas fa-camera"></i>
        </div>
        <img src="{{ asset('images/ANNI.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-portrait"></i> Shooting Photo</h3>
          <p>Maquillage professionnel optimisé pour les séances photo en studio ou extérieur.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Adapté au type de lumière</li>
            <li><i class="fas fa-check"></i> Finition HD</li>
            <li><i class="fas fa-check"></i> Sans reflets indésirables</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(2h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="service-item" data-category="special">
        <div class="service-badge">Exclusif</div>
        <div class="service-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <img src="{{ asset('images/ARTE.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-palette"></i> Artistique</h3>
          <p>Création unique et originale pour des événements à thème ou déguisements.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Design personnalisé</li>
            <li><i class="fas fa-check"></i> Produits spéciaux</li>
            <li><i class="fas fa-check"></i> Temps variable selon complexité</li>
          </ul>
          <div class="service-price">À partir de 100€ <span class="service-duration">(2h minimum)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

        <!-- Catégorie Fiançailles -->
    <h3 class="service-category-title">Fiançailles</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">Tendance</div>
        <div class="service-icon">
          <i class="fas fa-heart"></i>
        </div>
        <img src="{{ asset('images/bcc.jpg') }}" alt="Maquillage fiançailles moderne">
        <div class="service-content">
          <h3><i class="fas fa-sparkles"></i> Modern Glam</h3>
          <p>Un maquillage glamour et moderne pour des fiançailles contemporaines.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Teint glowy parfait</li>
            <li><i class="fas fa-check"></i> Faux cils 3D</li>
            <li><i class="fas fa-check"></i> Highlighter intense</li>
          </ul>
          <div class="service-price">160€ <span class="service-duration">(2h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">Luxe</div>
        <div class="service-icon">
          <i class="fas fa-diamond"></i>
        </div>
        <img src="{{ asset('images/via.jpg') }}" alt="Maquillage fiançailles sophistiqué">
        <div class="service-content">
          <h3><i class="fas fa-crown"></i> Sophistication Royale</h3>
          <p>Un maquillage sophistiqué et luxueux pour une occasion exceptionnelle.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Contouring professionnel</li>
            <li><i class="fas fa-check"></i> Pigments luxueux</li>
            <li><i class="fas fa-check"></i> Tenue 12h garantie</li>
          </ul>
          <div class="service-price">190€ <span class="service-duration">(2h30 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">VIP</div>
        <div class="service-icon">
          <i class="fas fa-crown"></i>
        </div>
        <img src="{{ asset('images/JOY.jpeg') }}" alt="Test avec une image qui marche"> 
        <div class="service-content">
          <h3><i class="fas fa-gem"></i> Look Joyaux</h3>
          <p>Maquillage royal inspiré des bijoux traditionnels pour une élégance majestueuse.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Détails dorés ou argentés</li>
            <li><i class="fas fa-check"></i> Effet bijoux sur les yeux</li>
            <li><i class="fas fa-check"></i> Produits haut de gamme</li>
          </ul>
          <div class="service-price">90€ <span class="service-duration">(2h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">Premium</div>
        <div class="service-icon">
          <i class="fas fa-wand-sparkles"></i>
        </div>
        <img src="{{ asset('images/abc.jpg') }}" alt="Maquillage fiançailles artistique">
        <div class="service-content">
          <h3><i class="fas fa-paint-brush"></i> Artistique Couture</h3>
          <p>Un maquillage haute couture unique et personnalisé pour une occasion inoubliable.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Design sur mesure</li>
            <li><i class="fas fa-check"></i> Essai inclus</li>
            <li><i class="fas fa-check"></i> Photos professionnelles</li>
          </ul>
          <div class="service-price">280€ <span class="service-duration">(3h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Halloween -->
    <h3 class="service-category-title">Halloween</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="halloween">
        <div class="service-badge">Effrayant</div>
        <div class="service-icon">
          <i class="fas fa-ghost"></i>
        </div>
        <img src="{{ asset('images/HorreurRéaliste.jpg') }}" alt="Maquillage horreur">
        <div class="service-content">
          <h3><i class="fas fa-skull"></i> Horreur Réaliste</h3>
          <p>Maquillage d'effets spéciaux pour un look terrifiant garanti.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Prothèses incluses</li>
            <li><i class="fas fa-check"></i> Faux sang professionnel</li>
            <li><i class="fas fa-check"></i> Tenue toute la nuit</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(2h30 de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="halloween">
        <div class="service-icon">
          <i class="fas fa-magic"></i>
        </div>
        <img src="{{ asset('images/fant.jpg') }}" alt="Maquillage fantaisie">
        <div class="service-content">
          <h3><i class="fas fa-hat-wizard"></i> Créature Fantastique</h3>
          <p>Transformation complète en créature fantastique ou mythologique.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Maquillage corps inclus</li>
            <li><i class="fas fa-check"></i> Accessoires spéciaux</li>
            <li><i class="fas fa-check"></i> Design personnalisé</li>
          </ul>
          <div class="service-price">150€ <span class="service-duration">(3h de prestation)</span></div>
          <a href="" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>
  </div>

<script>
  // Filtrage des services par catégorie
  document.querySelectorAll('.category-btn').forEach(button => {
    button.addEventListener('click', () => {
      // Retirer la classe active de tous les boutons
      document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      
      // Ajouter la classe active au bouton cliqué
      button.classList.add('active');
      
      const category = button.dataset.category;
      const serviceItems = document.querySelectorAll('.service-item');
      
      if (category === 'all') {
        // Afficher tous les services
        serviceItems.forEach(item => {
          item.style.display = 'block';
        });
        
        // Afficher tous les titres de catégorie
        document.querySelectorAll('.service-category-title').forEach(title => {
          title.style.display = 'block';
        });
      } else {
        // Masquer tous les services
        serviceItems.forEach(item => {
          item.style.display = 'none';
        });
        
        // Masquer tous les titres de catégorie
        document.querySelectorAll('.service-category-title').forEach(title => {
          title.style.display = 'none';
        });
        
        // Afficher uniquement les services de la catégorie sélectionnée
        const selectedItems = document.querySelectorAll(`.service-item[data-category="${category}"]`);
        selectedItems.forEach(item => {
          item.style.display = 'block';
        });
        
        // Afficher le titre de la catégorie correspondante
        if (selectedItems.length > 0) {
          const categoryTitle = document.querySelector(`.service-category-title`);
          categoryTitle.style.display = 'block';
          categoryTitle.textContent = button.textContent;
        }
      }
    });
  });
</script>

@include('layouts.footer')
</body>
</html>