@extends('layouts.service')

@section('title', 'Soins du Visage')
@section('description', 'Découvrez nos soins du visage professionnels chez EleganceVibe. Des traitements personnalisés pour une peau rayonnante.')

@section('styles')
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

  /* Service Header styles */
  .service-header {
    position: relative;
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    overflow: hidden;
    margin-top: 80px;
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

  .service-header::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: -1;
  }

  .service-header-content {
    position: relative;
    z-index: 1;
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
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    padding: 2rem 0;
    width: 100%;
  }

  .service-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
  }

  .service-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    object-position: center;
    transition: transform 0.3s ease;
  }

  .service-item:hover img {
    transform: scale(1.05);
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
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }

  .service-content h3 {
    color: #8b4a2b;
    font-size: 1.4rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
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
    margin: 1rem 0;
    flex-grow: 1;
  }

  .service-features li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .service-features i {
    color: #8b4a2b;
    font-size: 0.8rem;
    min-width: 18px;
  }

  .service-price {
    font-size: 1.3rem;
    color: #ff9966;
    font-weight: bold;
    margin: 1rem 0;
  }

  .btn-reserver {
    display: inline-block;
    width: 100%;
    padding: 0.8rem 1.5rem;
    background-color: #8b4a2b;
    color: white;
    text-align: center;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    border: 2px solid #8b4a2b;
    margin-top: auto;
  }

  .btn-reserver:hover {
    background-color: transparent;
    color: #8b4a2b;
  }

  .service-duration {
    font-size: 0.9rem;
    color: #666;
    display: block;
    margin-top: 0.25rem;
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
    }
    
    .service-header h1 {
      font-size: 2rem;
    }
  }
</style>
@endsection

@section('content')
  <div class="service-header">
    <video autoplay muted loop playsinline>
      <source src="{{ asset('images/soinsvisage.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Soins du Visage</h1>
      <p>Des soins personnalisés pour sublimer votre peau</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Soins du Visage</h2>
      <p>Découvrez notre gamme complète de soins du visage, adaptés à tous les types de peau et besoins spécifiques.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="nettoyage">Nettoyage</button>
      <button class="category-btn" data-category="anti-age">Anti-âge</button>
      <button class="category-btn" data-category="hydratation">Hydratation</button>
      <button class="category-btn" data-category="specifique">Soins Spécifiques</button>
    </div>

    <div class="service-grid">
      <!-- Soin Nettoyant Profond -->
      <div class="service-item" data-category="nettoyage">
        <div class="service-badge">Best Seller</div>
        <div class="service-content">
          <h3><i class="fas fa-sparkles"></i> Nettoyage Profond</h3>
          <p>Un soin complet pour purifier et détoxifier votre peau.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Double nettoyage</li>
            <li><i class="fas fa-check"></i> Gommage personnalisé</li>
            <li><i class="fas fa-check"></i> Extraction des comédons</li>
          </ul>
          <div class="service-price">75€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Anti-âge Premium -->
      <div class="service-item" data-category="anti-age">
        <div class="service-badge">Premium</div>
        <div class="service-content">
          <h3><i class="fas fa-clock-rotate-left"></i> Anti-âge Premium</h3>
          <p>Traitement anti-âge complet avec des actifs haute performance.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Sérum concentré</li>
            <li><i class="fas fa-check"></i> Massage lifting</li>
            <li><i class="fas fa-check"></i> Masque collagène</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Hydratation Intense -->
      <div class="service-item" data-category="hydratation">
        <div class="service-content">
          <h3><i class="fas fa-droplet"></i> Hydratation Intense</h3>
          <p>Soin réparateur pour les peaux déshydratées.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Acide hyaluronique</li>
            <li><i class="fas fa-check"></i> Masque hydratant</li>
            <li><i class="fas fa-check"></i> Massage drainant</li>
          </ul>
          <div class="service-price">85€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Peau Sensible -->
      <div class="service-item" data-category="specifique">
        <div class="service-content">
          <h3><i class="fas fa-shield-heart"></i> Soin Peau Sensible</h3>
          <p>Traitement apaisant pour les peaux réactives.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Produits apaisants</li>
            <li><i class="fas fa-check"></i> Protocole doux</li>
            <li><i class="fas fa-check"></i> Masque calmant</li>
          </ul>
          <div class="service-price">90€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Éclat Express -->
      <div class="service-item" data-category="nettoyage">
        <div class="service-content">
          <h3><i class="fas fa-sun"></i> Éclat Express</h3>
          <p>Un coup d'éclat rapide pour toutes occasions.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Nettoyage express</li>
            <li><i class="fas fa-check"></i> Masque illuminateur</li>
            <li><i class="fas fa-check"></i> Crème finale</li>
          </ul>
          <div class="service-price">45€ <span class="service-duration">(30min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Anti-imperfections -->
      <div class="service-item" data-category="specifique">
        <div class="service-content">
          <h3><i class="fas fa-wand-magic-sparkles"></i> Anti-imperfections</h3>
          <p>Solution ciblée pour les peaux à problèmes.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Purification profonde</li>
            <li><i class="fas fa-check"></i> Traitement antibactérien</li>
            <li><i class="fas fa-check"></i> Masque purifiant</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Anti-âge Luxe -->
      <div class="service-item" data-category="anti-age">
        <div class="service-badge">Luxe</div>
        <div class="service-content">
          <h3><i class="fas fa-gem"></i> Anti-âge Prestige</h3>
          <p>Soin haute performance aux actifs précieux.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Or 24 carats</li>
            <li><i class="fas fa-check"></i> Caviar</li>
            <li><i class="fas fa-check"></i> Massage sculptant</li>
          </ul>
          <div class="service-price">180€ <span class="service-duration">(1h45)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Oxygénant -->
      <div class="service-item" data-category="hydratation">
        <div class="service-content">
          <h3><i class="fas fa-wind"></i> Soin Oxygénant</h3>
          <p>Boost d'éclat pour peaux ternes.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Oxygénation cellulaire</li>
            <li><i class="fas fa-check"></i> Vitamines</li>
            <li><i class="fas fa-check"></i> Détox</li>
          </ul>
          <div class="service-price">110€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Peeling Professionnel -->
      <div class="service-item" data-category="specifique">
        <div class="service-badge">Expert</div>
        <div class="service-content">
          <h3><i class="fas fa-microscope"></i> Peeling Pro</h3>
          <p>Rénovation cutanée intense.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Acides de fruits</li>
            <li><i class="fas fa-check"></i> Resurfaçage</li>
            <li><i class="fas fa-check"></i> Régénération</li>
          </ul>
          <div class="service-price">130€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin LED -->
      <div class="service-item" data-category="specifique">
        <div class="service-content">
          <h3><i class="fas fa-lightbulb"></i> Photothérapie LED</h3>
          <p>Traitement par lumière pulsée.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Anti-inflammatoire</li>
            <li><i class="fas fa-check"></i> Régénération cellulaire</li>
            <li><i class="fas fa-check"></i> Anti-âge</li>
          </ul>
          <div class="service-price">85€ <span class="service-duration">(30min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Jeunesse Regard -->
      <div class="service-item" data-category="anti-age">
        <div class="service-content">
          <h3><i class="fas fa-eye"></i> Jeunesse Regard</h3>
          <p>Soin spécifique contour des yeux.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Drainage lymphatique</li>
            <li><i class="fas fa-check"></i> Lissage rides</li>
            <li><i class="fas fa-check"></i> Masque collagène</li>
          </ul>
          <div class="service-price">70€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const serviceItems = document.querySelectorAll('.service-item');
    
    categoryBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        categoryBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        const category = this.getAttribute('data-category');
        
        serviceItems.forEach(item => {
          if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
            item.style.animation = 'fadeIn 0.5s ease-out';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });

  const style = document.createElement('style');
  style.textContent = `
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  `;
  document.head.appendChild(style);
</script>
@endsection
