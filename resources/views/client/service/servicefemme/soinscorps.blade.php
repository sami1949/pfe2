@extends('layouts.service')

@section('title', 'Soins du Corps')
@section('description', 'Découvrez nos soins du corps professionnels chez EleganceVibe. Des rituels bien-être pour sublimer votre corps.')

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
  }

  .service-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s;
  }

  .service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
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

  .service-content {
    padding: 1.5rem;
  }

  .service-content h3 {
    color: #8b4a2b;
    font-size: 1.4rem;
    margin-bottom: 1rem;
  }

  .service-content p {
    color: #666;
    margin-bottom: 1rem;
  }

  .service-features {
    margin: 1rem 0;
  }

  .service-features li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
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
    text-decoration: none;
    border-radius: 30px;
    transition: all 0.3s;
  }

  .btn-reserver:hover {
    background-color: #6b3a20;
    transform: translateY(-2px);
  }

  @media (max-width: 768px) {
    .service-header {
      height: 60vh;
    }

    .service-header h1 {
      font-size: 2rem;
    }

    .service-intro h2 {
      font-size: 2rem;
    }
  }
</style>
@endsection

@section('content')
  <div class="service-header">
    <video autoplay muted loop playsinline>
      <source src="{{ asset('images/soinscorps.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Soins du Corps</h1>
      <p>Des rituels bien-être pour sublimer votre corps</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Soins Corporels</h2>
      <p>Découvrez notre sélection de soins du corps pour une expérience bien-être complète et personnalisée.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="gommage">Gommages</button>
      <button class="category-btn" data-category="enveloppement">Enveloppements</button>
      <button class="category-btn" data-category="minceur">Minceur</button>
      <button class="category-btn" data-category="rituel">Rituels</button>
    </div>

    <div class="service-grid">
      <!-- Gommage Corps Complet -->
      <div class="service-item" data-category="gommage">
        <div class="service-badge">Best Seller</div>
        <div class="service-content">
          <h3><i class="fas fa-screwdriver"></i> Gommage Sublimant</h3>
          <p>Exfoliation complète du corps pour une peau douce et régénérée.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage personnalisé</li>
            <li><i class="fas fa-check"></i> Hydratation profonde</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
          </ul>
          <div class="service-price">85€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Enveloppement Détox -->
      <div class="service-item" data-category="enveloppement">
        <div class="service-content">
          <h3><i class="fas fa-leaf"></i> Enveloppement Détox</h3>
          <p>Soin détoxifiant aux algues marines.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage préparatoire</li>
            <li><i class="fas fa-check"></i> Enveloppement aux algues</li>
            <li><i class="fas fa-check"></i> Hydratation finale</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Minceur -->
      <div class="service-item" data-category="minceur">
        <div class="service-badge">Programme</div>
        <div class="service-content">
          <h3><i class="fas fa-ruler"></i> Soin Minceur Expert</h3>
          <p>Programme amincissant ciblé et personnalisé.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Palper-rouler</li>
            <li><i class="fas fa-check"></i> Drainage lymphatique</li>
            <li><i class="fas fa-check"></i> Enveloppement minceur</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Spa -->
      <div class="service-item" data-category="rituel">
        <div class="service-badge">Premium</div>
        <div class="service-content">
          <h3><i class="fas fa-spa"></i> Rituel Spa Luxe</h3>
          <p>Une expérience bien-être complète.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage corps</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
            <li><i class="fas fa-check"></i> Soin visage express</li>
          </ul>
          <div class="service-price">160€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Jambes Légères -->
      <div class="service-item" data-category="minceur">
        <div class="service-content">
          <h3><i class="fas fa-wind"></i> Jambes Légères</h3>
          <p>Soin drainant pour des jambes légères.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Drainage lymphatique</li>
            <li><i class="fas fa-check"></i> Enveloppement fraîcheur</li>
            <li><i class="fas fa-check"></i> Massage circulatoire</li>
          </ul>
          <div class="service-price">75€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Hammam -->
      <div class="service-item" data-category="rituel">
        <div class="service-content">
          <h3><i class="fas fa-hot-tub"></i> Rituel Hammam</h3>
          <p>Tradition orientale de bien-être.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Séance hammam</li>
            <li><i class="fas fa-check"></i> Gommage au savon noir</li>
            <li><i class="fas fa-check"></i> Massage oriental</li>
          </ul>
          <div class="service-price">140€ <span class="service-duration">(1h45)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Minceur Cryothérapie -->
      <div class="service-item" data-category="minceur">
        <div class="service-badge">Innovant</div>
        <div class="service-content">
          <h3><i class="fas fa-snowflake"></i> Cryothérapie</h3>
          <p>Traitement minceur par le froid.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Drainage intense</li>
            <li><i class="fas fa-check"></i> Raffermissement</li>
            <li><i class="fas fa-check"></i> Anti-cellulite</li>
          </ul>
          <div class="service-price">130€ <span class="service-duration">(45min)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Enveloppement Chocolat -->
      <div class="service-item" data-category="enveloppement">
        <div class="service-content">
          <h3><i class="fas fa-cookie"></i> Douceur Chocolatée</h3>
          <p>Soin gourmand nourrissant.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage cacao</li>
            <li><i class="fas fa-check"></i> Enveloppement chocolat</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
          </ul>
          <div class="service-price">110€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Silhouette -->
      <div class="service-item" data-category="minceur">
        <div class="service-badge">Résultat</div>
        <div class="service-content">
          <h3><i class="fas fa-ruler-vertical"></i> Remodelage Silhouette</h3>
          <p>Programme minceur personnalisé.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> LPG endermologie</li>
            <li><i class="fas fa-check"></i> Massage amincissant</li>
            <li><i class="fas fa-check"></i> Conseils nutrition</li>
          </ul>
          <div class="service-price">150€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Gommage aux Cristaux -->
      <div class="service-item" data-category="gommage">
        <div class="service-content">
          <h3><i class="fas fa-gem"></i> Cristaux Précieux</h3>
          <p>Exfoliation luxueuse aux cristaux.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Cristaux de sel</li>
            <li><i class="fas fa-check"></i> Huiles précieuses</li>
            <li><i class="fas fa-check"></i> Hydratation</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Future Maman -->
      <div class="service-item" data-category="rituel">
        <div class="service-badge">Spécial</div>
        <div class="service-content">
          <h3><i class="fas fa-baby"></i> Cocon Prénatal</h3>
          <p>Soin adapté à la grossesse.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Massage prénatal</li>
            <li><i class="fas fa-check"></i> Soin jambes légères</li>
            <li><i class="fas fa-check"></i> Hydratation intense</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(1h30)</span></div>
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
