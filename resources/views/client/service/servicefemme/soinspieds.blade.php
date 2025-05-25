<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez nos soins des pieds professionnels chez EleganceVibe. Pédicure, soins experts et massages pour des pieds légers et sublimés.">
  <title>Soins des Pieds - EleganceVibe</title>
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
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                url('/images/back4.jpg') center/cover no-repeat;
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #ffffff;
    background-attachment: fixed;
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
    position: relative;
    z-index: 2;
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

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  </style>
</head>
<body>
<header>
    <div class="logo">EleganceVibe</div>
    <nav>
      <ul>
        <li><a href="#"><i class="fas fa-home"></i> Accueil</a></li>
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
      <source src="{{ asset('images/s.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Soins des Pieds</h1>
      <p>Retrouvez le confort et la légèreté de vos pieds</p>
    </div>
</div>

<div class="service-container">
    <div class="service-intro">
      <h2>Nos Soins des Pieds</h2>
      <p>Des soins experts pour des pieds en parfaite santé, du soin médical à la beauté des ongles.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="pedicure">Pédicure</button>
      <button class="category-btn" data-category="medical">Soins Médicaux</button>
      <button class="category-btn" data-category="beaute">Beauté</button>
      <button class="category-btn" data-category="massage">Massage</button>
    </div>

    <!-- Catégorie Pédicure -->
    <h3 class="service-category-title">Pédicure</h3>
    <div class="service-grid">
      <!-- Pédicure Classique -->
      <div class="service-item" data-category="pedicure">
        <div class="service-badge">Essentiel</div>
        <div class="service-icon">
          <i class="fas fa-shoe-prints"></i>
        </div>
        <img src="{{ asset('images/ped.jpg') }}" alt="Pédicure classique">
        <div class="service-content">
          <h3><i class="fas fa-shoe-prints"></i> Pédicure Classique</h3>
          <p>Soin complet des pieds et des ongles pour un résultat naturel et élégant.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Bain de pieds relaxant</li>
            <li><i class="fas fa-check"></i> Soin des ongles</li>
            <li><i class="fas fa-check"></i> Élimination des callosités</li>
            <li><i class="fas fa-check"></i> Vernis classique</li>
          </ul>
          <div class="service-price">45€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Pédicure Française -->
      <div class="service-item" data-category="pedicure">
        <div class="service-badge">Classique</div>
        <div class="service-icon">
          <i class="fas fa-heart"></i>
        </div>
        <img src="{{ asset('images/pedd.jpg') }}" alt="Pédicure française">
        <div class="service-content">
          <h3><i class="fas fa-heart"></i> Pédicure Française</h3>
          <p>Le classique intemporel avec des pointes blanches parfaites.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Forme des ongles au choix</li>
            <li><i class="fas fa-check"></i> Pointes blanches parfaites</li>
            <li><i class="fas fa-check"></i> Base et top coat protecteurs</li>
            <li><i class="fas fa-check"></i> Massage des pieds</li>
          </ul>
          <div class="service-price">55€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Soins Médicaux -->
    <h3 class="service-category-title">Soins Médicaux</h3>
    <div class="service-grid">
      <!-- Soin Médical -->
      <div class="service-item" data-category="medical">
        <div class="service-badge">Spécialisé</div>
        <div class="service-icon">
          <i class="fas fa-plus-square"></i>
        </div>
        <img src="{{ asset('images/med.jpg') }}" alt="Pédicure médicale">
        <div class="service-content">
          <h3><i class="fas fa-plus-square"></i> Pédicure Médicale</h3>
          <p>Traitement des problèmes spécifiques des pieds par un professionnel.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Traitement cors/durillons</li>
            <li><i class="fas fa-check"></i> Soin ongles incarnés</li>
            <li><i class="fas fa-check"></i> Conseils personnalisés</li>
            <li><i class="fas fa-check"></i> Matériel stérilisé</li>
          </ul>
          <div class="service-price">60€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Ongles Épais -->
      <div class="service-item" data-category="medical">
        <div class="service-icon">
          <i class="fas fa-clinic-medical"></i>
        </div>
        <img src="{{ asset('images/OnglesÉpais.jpg') }}" alt="Soin ongles épais">
        <div class="service-content">
          <h3><i class="fas fa-clinic-medical"></i> Soin Ongles Épais</h3>
          <p>Traitement professionnel des ongles épaissis ou jaunis.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Amincissement de l'ongle</li>
            <li><i class="fas fa-check"></i> Traitement antifongique</li>
            <li><i class="fas fa-check"></i> Conseils prévention</li>
          </ul>
          <div class="service-price">65€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Beauté -->
    <h3 class="service-category-title">Beauté</h3>
    <div class="service-grid">
      <!-- Beauté des Pieds -->
      <div class="service-item" data-category="beaute">
        <div class="service-badge">Best Seller</div>
        <div class="service-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <img src="{{ asset('images/piedss.jpg') }}" alt="Beauté des pieds">
        <div class="service-content">
          <h3><i class="fas fa-paint-brush"></i> Beauté des Pieds</h3>
          <p>Soin esthétique complet pour des pieds sublimes.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage doux</li>
            <li><i class="fas fa-check"></i> Pose vernis professionnel</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
            <li><i class="fas fa-check"></i> Hydratation intense</li>
          </ul>
          <div class="service-price">55€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Semi-Permanent -->
      <div class="service-item" data-category="beaute">
        <div class="service-icon">
          <i class="fas fa-magic"></i>
        </div>
        <img src="{{ asset('images/semi.jpg') }}" alt="Vernis semi-permanent">
        <div class="service-content">
          <h3><i class="fas fa-magic"></i> Vernis Semi-Permanent</h3>
          <p>Pour des ongles parfaits pendant plusieurs semaines.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Préparation de l'ongle</li>
            <li><i class="fas fa-check"></i> Pose vernis semi-permanent</li>
            <li><i class="fas fa-check"></i> Protection UV</li>
            <li><i class="fas fa-check"></i> Durée 3-4 semaines</li>
          </ul>
          <div class="service-price">40€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>

    <!-- Catégorie Massage -->
    <h3 class="service-category-title">Massage</h3>
    <div class="service-grid">
      <!-- Réflexologie -->
      <div class="service-item" data-category="massage">
        <div class="service-badge">Premium</div>
        <div class="service-icon">
          <i class="fas fa-hand-holding"></i>
        </div>
        <img src="{{ asset('images/RéflexologiePlantaire.jpg') }}" alt="Réflexologie plantaire">
        <div class="service-content">
          <h3><i class="fas fa-hand-holding"></i> Réflexologie Plantaire</h3>
          <p>Massage thérapeutique des zones réflexes pour un bien-être global.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Diagnostic énergétique</li>
            <li><i class="fas fa-check"></i> Massage ciblé</li>
            <li><i class="fas fa-check"></i> Rééquilibrage énergétique</li>
            <li><i class="fas fa-check"></i> Détente profonde</li>
          </ul>
          <div class="service-price">70€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Massage Détente -->
      <div class="service-item" data-category="massage">
        <div class="service-icon">
          <i class="fas fa-spa"></i>
        </div>
        <img src="{{ asset('images/MassageDétente.jpg') }}" alt="Massage détente">
        <div class="service-content">
          <h3><i class="fas fa-spa"></i> Massage Détente</h3>
          <p>Un moment de pure relaxation pour vos pieds fatigués.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Bain aromatique</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
            <li><i class="fas fa-check"></i> Hydratation profonde</li>
            <li><i class="fas fa-check"></i> Huiles essentielles</li>
          </ul>
          <div class="service-price">45€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
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
        // Afficher tous les services et titres
        serviceItems.forEach(item => {
          item.style.display = 'block';
        });
        
        document.querySelectorAll('.service-category-title').forEach(title => {
          title.style.display = 'block';
        });
      } else {
        // Masquer tous les services
        serviceItems.forEach(item => {
          item.style.display = 'none';
        });
        
        // Masquer tous les titres puis afficher ceux qui ont des services
        document.querySelectorAll('.service-category-title').forEach(title => {
          title.style.display = 'none';
        });
        
        // Afficher les services de la catégorie
        const selectedItems = document.querySelectorAll(`.service-item[data-category="${category}"]`);
        selectedItems.forEach(item => {
          item.style.display = 'block';
          item.style.animation = 'fadeIn 0.5s ease-out';
        });
        
        // Afficher le titre correspondant s'il y a des services
        if (selectedItems.length > 0) {
          const categoryTitles = {
            'pedicure': 'Pédicure',
            'medical': 'Soins Médicaux',
            'beaute': 'Beauté',
            'massage': 'Massage'
          };
          
          const titles = document.querySelectorAll('.service-category-title');
          titles.forEach(title => {
            if (title.textContent === categoryTitles[category]) {
              title.style.display = 'block';
            }
          });
        }
      }
    });
  });
</script>
</body>
</html>