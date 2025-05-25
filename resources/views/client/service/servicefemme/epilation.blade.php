<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Services d'épilation professionnelle par EleganceVibe. Découvrez nos prestations pour une peau douce et lisse plus longtemps.">
  <title>Épilation Professionnelle - EleganceVibe</title>
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
          url("/images/eepp.jpg");
      background-size: cover;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      background-attachment: fixed;
    }

    .service-header h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .service-header p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
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
      height: auto;
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
    }

    .service-features i {
      color: #8b4a2b;
    }

    .service-price {
      font-weight: bold;
      color: #ff9966;
      font-size: 1.3rem;
      margin-bottom: 20px;
      text-align: right;
    }

    .service-duration {
      font-size: 0.85rem;
      color: #888;
      display: block;
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
        height: 60vh;
      }

      .service-header h1 {
        font-size: 2rem;
      }

      .service-grid {
        grid-template-columns: 1fr;
      }

      .service-item img {
        height: 220px;
      }
      
      .service-icon {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
      }
    }

    .categories-container {
      position: relative;
    }

    .category-section {
      margin-bottom: 40px;
    }

    .service-category-title {
      position: sticky;
      top: 80px; /* Ajustez selon la hauteur de votre header */
      background: #f8f6f4;
      padding: 20px 0;
      margin: 0;
      z-index: 90;
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
        <li><a href="/gallery"><i class="fas fa-images"></i> Gallerie</a></li>
        <li><a href="/products"><i class="fas fa-shopping-bag"></i> Produits</a></li>
        <li><a href="/contacts"><i class="fas fa-envelope"></i> Contact</a></li>
        <li><a href="/login" class="btn-nav"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
        <li><a href="/register" class="btn-nav"><i class="fas fa-user-plus"></i> Inscription</a></li>
      </ul>
    </nav>
  </header>

  <div class="service-header">
    <div>
      <h1>Épilation Professionnelle</h1>
      <p>Des techniques d'épilation adaptées à votre peau pour une douceur longue durée</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Services d'Épilation</h2>
      <p>Découvrez nos différentes techniques d'épilation réalisées par nos esthéticiennes expertes, pour une peau douce et lisse plus longtemps.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tout</button>
      <button class="category-btn" data-category="visage">Visage</button>
      <button class="category-btn" data-category="corps">Corps</button>
      <button class="category-btn" data-category="jambes">Jambes</button>
      <button class="category-btn" data-category="forfaits">Forfaits</button>
    </div>

    <div class="categories-container">
      <!-- Section Visage -->
      <div class="category-section" data-category="visage">
        <h3 class="service-category-title">Épilation du Visage</h3>
        <div class="service-grid">
          <!-- Services visage -->
          <div class="service-item" data-category="visage">
            
            <div class="service-icon">
              <i class="fas fa-spa"></i>
            </div>
            <img src="/images/Épilationdessourcils.jpg" alt="Épilation des sourcils">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Épilation des sourcils</h3>
              <p>Mise en forme et épilation précise des sourcils pour un regard harmonieux.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Technique à la cire et à la pince</li>
              </ul>
              <div class="service-price">12€</div>
              <a href="#" class="btn-reserver">Réserver</a>
            </div>
          </div>

          <div class="service-item" data-category="visage">
            
            <img src="/images/Épilatiolèvre.jpg" alt="Épilation de la lèvre supérieure">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Lèvre supérieure</h3>
              <p>Épilation douce et précise de la lèvre supérieure.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 10 minutes</li>
                <li><i class="fas fa-check"></i>Cire spéciale zones sensibles</li>
              </ul>
              <div class="service-price">8€</div>
            </div>
          </div>

          <div class="service-item" data-category="visage">
          <img src="/images/Épilationmenton.jpg" alt="Épilation du menton">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Menton</h3>
              <p>Épilation minutieuse du menton pour une peau nette.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 10 minutes</li>
                <li><i class="fas fa-check"></i>Résultat longue durée</li>
              </ul>
              <div class="service-price">8€</div>
            </div>
          </div>

          <div class="service-item" data-category="visage">

            <img src="/images/epilation/joues.jpg" alt="Épilation des joues">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Joues</h3>
              <p>Épilation délicate des joues pour un visage parfait.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Adapté aux peaux sensibles</li>
              </ul>
              <div class="service-price">10€</div>
            </div>
          </div>

          <div class="service-item" data-category="visage">
            <div class="service-badge">Visage</div>
            <img src="/images/epilation/visage-complet.jpg" alt="Épilation visage complet">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Visage complet</h3>
              <p>Épilation complète du visage incluant sourcils, lèvres, menton et joues.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 45 minutes</li>
                <li><i class="fas fa-check"></i>Traitement complet</li>
              </ul>
              <div class="service-price">35€</div>
            </div>
          </div>

          <div class="service-item" data-category="visage">
            <div class="service-badge">Visage</div>
            <img src="/images/epilation/cou.jpg" alt="Épilation du cou">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Cou</h3>
              <p>Épilation précise du cou pour une finition impeccable.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Résultat naturel</li>
              </ul>
              <div class="service-price">12€</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section Corps -->
      <div class="category-section" data-category="corps">
        <h3 class="service-category-title">Épilation du Corps</h3>
        <div class="service-grid">
          <!-- Services corps -->
          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/aisselles.jpg" alt="Épilation des aisselles">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Aisselles</h3>
              <p>Épilation douce et efficace des aisselles.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Résultat jusqu'à 4 semaines</li>
              </ul>
              <div class="service-price">15€</div>
            </div>
          </div>

          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/bras.jpg" alt="Épilation des bras">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Bras complets</h3>
              <p>Épilation complète des bras pour une peau douce.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 30 minutes</li>
                <li><i class="fas fa-check"></i>Incluant les avant-bras</li>
              </ul>
              <div class="service-price">25€</div>
            </div>
          </div>

          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/dos.jpg" alt="Épilation du dos">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Dos complet</h3>
              <p>Épilation complète du dos pour une peau nette.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 45 minutes</li>
                <li><i class="fas fa-check"></i>Traitement en profondeur</li>
              </ul>
              <div class="service-price">35€</div>
            </div>
          </div>

          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/ventre.jpg" alt="Épilation du ventre">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Ventre</h3>
              <p>Épilation douce du ventre adaptée à votre type de peau.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 20 minutes</li>
                <li><i class="fas fa-check"></i>Résultat longue durée</li>
              </ul>
              <div class="service-price">20€</div>
            </div>
          </div>

          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/maillot-simple.jpg" alt="Épilation maillot simple">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Maillot simple</h3>
              <p>Épilation basique de la zone du maillot.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 20 minutes</li>
                <li><i class="fas fa-check"></i>Cire hypoallergénique</li>
              </ul>
              <div class="service-price">18€</div>
            </div>
          </div>

          <div class="service-item" data-category="corps">
            <div class="service-badge">Corps</div>
            <img src="/images/epilation/maillot-bresilien.jpg" alt="Épilation maillot brésilien">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Maillot brésilien</h3>
              <p>Épilation approfondie de la zone du maillot.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 30 minutes</li>
                <li><i class="fas fa-check"></i>Résultat optimal</li>
              </ul>
              <div class="service-price">28€</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section Jambes -->
      <div class="category-section" data-category="jambes">
        <h3 class="service-category-title">Épilation des Jambes</h3>
        <div class="service-grid">
          <!-- Services jambes -->
          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/demi-jambes.jpg" alt="Épilation demi-jambes">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Demi-jambes</h3>
              <p>Épilation des jambes jusqu'aux genoux.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 30 minutes</li>
                <li><i class="fas fa-check"></i>Résultat impeccable</li>
              </ul>
              <div class="service-price">22€</div>
            </div>
          </div>

          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/jambes-completes.jpg" alt="Épilation jambes complètes">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Jambes complètes</h3>
              <p>Épilation intégrale des jambes pour une douceur parfaite.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 45 minutes</li>
                <li><i class="fas fa-check"></i>Soin après-épilation offert</li>
              </ul>
              <div class="service-price">35€</div>
            </div>
          </div>

          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/cuisses.jpg" alt="Épilation des cuisses">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Cuisses</h3>
              <p>Épilation ciblée des cuisses uniquement.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 30 minutes</li>
                <li><i class="fas fa-check"></i>Technique adaptée</li>
              </ul>
              <div class="service-price">25€</div>
            </div>
          </div>

          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/pieds.jpg" alt="Épilation des pieds">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Pieds et orteils</h3>
              <p>Épilation délicate des pieds et orteils.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Soin doux</li>
              </ul>
              <div class="service-price">10€</div>
            </div>
          </div>

          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/genoux.jpg" alt="Épilation des genoux">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Genoux</h3>
              <p>Épilation précise de la zone des genoux.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 15 minutes</li>
                <li><i class="fas fa-check"></i>Attention particulière</li>
              </ul>
              <div class="service-price">12€</div>
            </div>
          </div>

          <div class="service-item" data-category="jambes">
            <div class="service-badge">Jambes</div>
            <img src="/images/epilation/mollets.jpg" alt="Épilation des mollets">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Mollets</h3>
              <p>Épilation soignée des mollets.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 20 minutes</li>
                <li><i class="fas fa-check"></i>Résultat durable</li>
              </ul>
              <div class="service-price">18€</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section Forfaits -->
      <div class="category-section" data-category="forfaits">
        <h3 class="service-category-title">Nos Forfaits d'Épilation</h3>
        <div class="service-grid">
          <!-- Services forfaits -->
          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-visage.jpg" alt="Forfait visage complet">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait visage complet</h3>
              <p>Sourcils, lèvres, menton et joues en une séance.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 45 minutes</li>
                <li><i class="fas fa-check"></i>15% de réduction</li>
              </ul>
              <div class="service-price">32€</div>
            </div>
          </div>

          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-jambes.jpg" alt="Forfait jambes intégral">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait jambes intégral</h3>
              <p>Jambes complètes, maillot simple et aisselles.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 1h15</li>
                <li><i class="fas fa-check"></i>20% de réduction</li>
              </ul>
              <div class="service-price">55€</div>
            </div>
          </div>

          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-corps.jpg" alt="Forfait corps complet">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait corps complet</h3>
              <p>Jambes, bras, aisselles, maillot et dos.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 2h</li>
                <li><i class="fas fa-check"></i>25% de réduction</li>
              </ul>
              <div class="service-price">95€</div>
            </div>
          </div>

          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-decouverte.jpg" alt="Forfait découverte">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait découverte</h3>
              <p>Demi-jambes, maillot simple et aisselles.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : 1h</li>
                <li><i class="fas fa-check"></i>15% de réduction</li>
              </ul>
              <div class="service-price">45€</div>
            </div>
          </div>

          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-mensuel.jpg" alt="Forfait mensuel">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait mensuel</h3>
              <p>4 séances d'épilation au choix sur un mois.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : Variable</li>
                <li><i class="fas fa-check"></i>30% de réduction</li>
              </ul>
              <div class="service-price">Prix variable</div>
            </div>
          </div>

          <div class="service-item" data-category="forfaits">
            <div class="service-badge">Forfait</div>
            <img src="/images/epilation/forfait-couple.jpg" alt="Forfait couple">
            <div class="service-content">
              <h3><i class="fas fa-spa"></i>Forfait couple</h3>
              <p>Épilation au choix pour deux personnes.</p>
              <ul class="service-features">
                <li><i class="fas fa-clock"></i>Durée : Variable</li>
                <li><i class="fas fa-check"></i>20% de réduction</li>
              </ul>
              <div class="service-price">Prix variable</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const categoryButtons = document.querySelectorAll('.category-btn');
        const categorySections = document.querySelectorAll('.category-section');

        categoryButtons.forEach(button => {
          button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Show/hide sections
            if (category === 'all') {
              // Show all sections
              categorySections.forEach(section => {
                section.style.display = 'block';
              });
            } else {
              // Hide all sections first
              categorySections.forEach(section => {
                section.style.display = 'none';
              });
              
              // Show selected category section
              document.querySelector(`.category-section[data-category="${category}"]`).style.display = 'block';
            }
          });
        });
      });
    </script>
  </div>
</body>
</html>
