<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez notre hammam traditionnel chez EleganceVibe. Une expérience authentique de bien-être et de détente.">
  <title>Hammam Traditionnel - EleganceVibe</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f6f4;
      color: #333;
      line-height: 1.6;
    }

    /* Header styles */
    header {
      background-color: #fff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #8b4a2b;
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav li {
      margin-left: 1.5rem;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    nav a:hover {
      color: #8b4a2b;
    }

    .btn-nav {
      background-color: #8b4a2b;
      color: white !important;
      padding: 0.5rem 1rem;
      border-radius: 4px;
      transition: all 0.3s;
    }

    .btn-nav:hover {
      background-color: #6b3a20;
      transform: translateY(-2px);
    }

    .service-header {
      position: relative;
      height: 90vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #ffffff;
    }

    .service-header video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .service-header-content {
      background-color: rgba(139, 74, 43, 0.7);
      padding: 2rem;
      border-radius: 10px;
      max-width: 800px;
      margin: 0 auto;
    }

    .service-header h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .service-header p {
      font-size: 1.2rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }

    .service-container {
      max-width: 1400px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .service-intro {
      text-align: center;
      margin-bottom: 50px;
    }

    .service-intro h2 {
      color: #8b4a2b;
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    .service-intro p {
      color: #555;
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
      background: #f0e6dd;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      color: #8b4a2b;
      cursor: pointer;
      transition: all 0.3s;
    }

    .category-btn.active, .category-btn:hover {
      background: #8b4a2b;
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

    .service-category-title {
      font-size: 2rem;
      color: #8b4a2b;
      margin: 60px 0 30px;
      text-align: center;
      position: relative;
    }

    .service-category-title:after {
      content: "";
      display: block;
      width: 100px;
      height: 3px;
      background: #ff9966;
      margin: 15px auto 0;
    }

    /* Footer styles */
    footer {
      background-color: #8b4a2b;
      color: white;
      padding: 3rem 2rem;
      margin-top: 50px;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .footer-content p {
      margin-bottom: 1.5rem;
    }

    .social-links {
      display: flex;
      gap: 20px;
      margin-bottom: 1.5rem;
    }

    .social-links a {
      color: white;
      font-size: 1.5rem;
      transition: transform 0.3s;
    }

    .social-links a:hover {
      transform: translateY(-5px);
    }

    .footer-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-bottom: 1.5rem;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      transition: opacity 0.3s;
    }

    .footer-links a:hover {
      opacity: 0.8;
    }

    .copyright {
      font-size: 0.9rem;
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 1rem;
      }

      nav ul {
        margin-top: 1rem;
        flex-wrap: wrap;
        justify-content: center;
      }

      nav li {
        margin: 0.5rem;
      }

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
      
      .service-item img {
        height: 220px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">EleganceVibe</div>
    <nav>
      <ul>
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="#services"><i class="fas fa-spa"></i> Services</a></li>
        <li><a href="#"><i class="fas fa-images"></i> Gallerie</a></li>
        <li><a href="#"><i class="fas fa-shopping-bag"></i> Produits</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
        <li><a href="#" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
        <li><a href="#" class="btn-nav"><i class="fas fa-user-plus"></i> Inscription</a></li>
      </ul>
    </nav>
  </header>

  <div class="service-header">
    <video autoplay muted loop playsinline>
      <source src="{{ asset('images/hammam.mp4') }}" type="video/mp4">
      Votre navigateur ne supporte pas la vidéo HTML5.
    </video>
    <div class="service-header-content">
      <h1>Hammam Traditionnel</h1>
      <p>Une expérience authentique de purification et de détente</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Notre Hammam</h2>
      <p>Découvrez les bienfaits du hammam traditionnel, un rituel millénaire de purification et de détente. Nos soins sont réalisés avec des produits naturels et authentiques.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="traditionnel">Rituels Traditionnels</button>
      <button class="category-btn" data-category="gommage">Gommages</button>
      <button class="category-btn" data-category="massage">Massages</button>
      <button class="category-btn" data-category="forfait">Forfaits</button>
    </div>

    <!-- Catégorie Rituels Traditionnels -->
    <h3 class="service-category-title">Rituels Traditionnels</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">Classique</div>
        <div class="service-icon">
          <i class="fas fa-spa"></i>
        </div>
        <img src="{{ asset('images/hammam-traditionnel.jpg') }}" alt="Hammam traditionnel">
        <div class="service-content">
          <h3><i class="fas fa-fire"></i> Hammam Traditionnel</h3>
          <p>Expérience complète de hammam avec bain de vapeur, gommage au savon noir et relaxation.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Bain de vapeur purifiant</li>
            <li><i class="fas fa-check"></i> Gommage au savon noir</li>
            <li><i class="fas fa-check"></i> Temps de relaxation</li>
          </ul>
          <div class="service-price">60€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="traditionnel">
        <div class="service-badge">Luxe</div>
        <div class="service-icon">
          <i class="fas fa-crown"></i>
        </div>
        <img src="{{ asset('images/hammam-royal.jpg') }}" alt="Hammam royal">
        <div class="service-content">
          <h3><i class="fas fa-gem"></i> Hammam Royal</h3>
          <p>Rituel premium avec soins à l'argile rouge, masque au rhassoul et huile d'argan.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Soin à l'argile rouge</li>
            <li><i class="fas fa-check"></i> Masque au rhassoul</li>
            <li><i class="fas fa-check"></i> Hydratation à l'huile d'argan</li>
          </ul>
          <div class="service-price">90€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Gommages -->
    <h3 class="service-category-title">Gommages</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="gommage">
        <div class="service-icon">
          <i class="fas fa-hand-sparkles"></i>
        </div>
        <img src="{{ asset('images/gommage-savon-noir.jpg') }}" alt="Gommage au savon noir">
        <div class="service-content">
          <h3><i class="fas fa-soap"></i> Gommage Savon Noir</h3>
          <p>Gommage traditionnel marocain pour une peau douce et purifiée.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Savon noir traditionnel</li>
            <li><i class="fas fa-check"></i> Gant de kessa</li>
            <li><i class="fas fa-check"></i> Élimination des peaux mortes</li>
          </ul>
          <div class="service-price">45€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="gommage">
        <div class="service-badge">Nouveau</div>
        <div class="service-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <img src="{{ asset('images/gommage-plantes.jpg') }}" alt="Gommage aux plantes">
        <div class="service-content">
          <h3><i class="fas fa-seedling"></i> Gommage aux Plantes</h3>
          <p>Gommage doux à base de plantes médicinales pour une peau radieuse.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Mélange de plantes naturelles</li>
            <li><i class="fas fa-check"></i> Adapté aux peaux sensibles</li>
            <li><i class="fas fa-check"></i> Effet anti-fatigue</li>
          </ul>
          <div class="service-price">55€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Massages -->
    <h3 class="service-category-title">Massages</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="massage">
        <div class="service-badge">Détente</div>
        <div class="service-icon">
          <i class="fas fa-water"></i>
        </div>
        <img src="{{ asset('images/massage-hammam.jpg') }}" alt="Massage après hammam">
        <div class="service-content">
          <h3><i class="fas fa-spa"></i> Massage Après Hammam</h3>
          <p>Massage relaxant pour prolonger les bienfaits du hammam.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Huiles essentielles</li>
            <li><i class="fas fa-check"></i> Détente musculaire</li>
            <li><i class="fas fa-check"></i> Hydratation profonde</li>
          </ul>
          <div class="service-price">65€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="massage">
        <div class="service-icon">
          <i class="fas fa-hand-holding-heart"></i>
        </div>
        <img src="{{ asset('images/massage-argile.jpg') }}" alt="Massage à l'argile">
        <div class="service-content">
          <h3><i class="fas fa-hand-holding-medical"></i> Massage à l'Argile</h3>
          <p>Massage thérapeutique avec de l'argile purifiante.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Argile naturelle</li>
            <li><i class="fas fa-check"></i> Détente profonde</li>
            <li><i class="fas fa-check"></i> Effet détoxifiant</li>
          </ul>
          <div class="service-price">70€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Forfaits -->
    <h3 class="service-category-title">Forfaits</h3>
    <div class="service-grid">
      <!-- Service 1 -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Complet</div>
        <div class="service-icon">
          <i class="fas fa-star"></i>
        </div>
        <img src="{{ asset('images/forfait-complet.jpg') }}" alt="Forfait complet hammam">
        <div class="service-content">
          <h3><i class="fas fa-crown"></i> Forfait Complet</h3>
          <p>Expérience ultime du hammam avec tous nos soins premium.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Hammam traditionnel</li>
            <li><i class="fas fa-check"></i> Gommage savon noir</li>
            <li><i class="fas fa-check"></i> Massage à l'huile d'argan</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(3h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Découverte</div>
        <div class="service-icon">
          <i class="fas fa-gem"></i>
        </div>
        <img src="{{ asset('images/forfait-decouverte.jpg') }}" alt="Forfait découverte">
        <div class="service-content">
          <h3><i class="fas fa-heart"></i> Forfait Découverte</h3>
          <p>Initiation aux plaisirs du hammam avec soin de base.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Séance de hammam</li>
            <li><i class="fas fa-check"></i> Gommage doux</li>
            <li><i class="fas fa-check"></i> Temps de relaxation</li>
          </ul>
          <div class="service-price">75€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-content">
      <p>EleganceVibe - Institut de beauté et bien-être</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
      </div>
      <div class="footer-links">
        <a href="#">Mentions légales</a>
        <a href="#">CGV</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">Contact</a>
      </div>
      <div class="copyright">
        &copy; 2023 EleganceVibe. Tous droits réservés.
      </div>
    </div>
  </footer>

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
        const categoryTitles = document.querySelectorAll('.service-category-title');
        
        if (category === 'all') {
          // Afficher tous les services et titres
          serviceItems.forEach(item => {
            item.style.display = 'block';
          });
          categoryTitles.forEach(title => {
            title.style.display = 'block';
          });
        } else {
          // Masquer tous les services et titres
          serviceItems.forEach(item => {
            item.style.display = 'none';
          });
          categoryTitles.forEach(title => {
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
</body>
</html>