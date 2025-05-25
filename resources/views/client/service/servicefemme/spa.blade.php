@extends('layouts.service')

@section('title', 'Spa & Rituels Bien-être')
@section('description', 'Découvrez notre espace spa et nos rituels bien-être chez EleganceVibe. Des soins luxueux pour une expérience de détente absolue.')

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
      <source src="{{ asset('images/spa.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Spa & Rituels Bien-être</h1>
      <p>Une parenthèse de luxe et de détente</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Soins Spa</h2>
      <p>Découvrez nos rituels spa et soins bien-être pour une expérience sensorielle unique et ressourçante.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="rituel">Rituels</button>
      <button class="category-btn" data-category="soin">Soins Corps</button>
      <button class="category-btn" data-category="hammam">Hammam</button>
      <button class="category-btn" data-category="forfait">Forfaits</button>
    </div>

    <div class="service-grid">
      <!-- Rituel Signature -->
      <div class="service-item" data-category="rituel">
        <div class="service-badge">Signature</div>
        <div class="service-content">
          <h3><i class="fas fa-spa"></i> Rituel Signature</h3>
          <p>Notre soin signature pour une expérience unique.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Hammam privatif</li>
            <li><i class="fas fa-check"></i> Gommage corps</li>
            <li><i class="fas fa-check"></i> Massage relaxant</li>
          </ul>
          <div class="service-price">160€ <span class="service-duration">(2h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Oriental -->
      <div class="service-item" data-category="rituel">
        <div class="service-badge">Best Seller</div>
        <div class="service-content">
          <h3><i class="fas fa-moon"></i> Rituel Oriental</h3>
          <p>Voyage sensoriel aux traditions orientales.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Hammam traditionnel</li>
            <li><i class="fas fa-check"></i> Gommage au savon noir</li>
            <li><i class="fas fa-check"></i> Massage oriental</li>
          </ul>
          <div class="service-price">140€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Soin Corps Détox -->
      <div class="service-item" data-category="soin">
        <div class="service-content">
          <h3><i class="fas fa-leaf"></i> Soin Corps Détox</h3>
          <p>Soin purifiant pour le corps et l'esprit.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage détoxifiant</li>
            <li><i class="fas fa-check"></i> Enveloppement aux algues</li>
            <li><i class="fas fa-check"></i> Massage drainant</li>
          </ul>
          <div class="service-price">120€ <span class="service-duration">(1h45)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Hammam Privatif -->
      <div class="service-item" data-category="hammam">
        <div class="service-content">
          <h3><i class="fas fa-hot-tub"></i> Hammam Privatif</h3>
          <p>Moment de détente dans notre hammam privatif.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Accès privatif</li>
            <li><i class="fas fa-check"></i> Kit hammam fourni</li>
            <li><i class="fas fa-check"></i> Thé offert</li>
          </ul>
          <div class="service-price">45€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Forfait Duo -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Romance</div>
        <div class="service-content">
          <h3><i class="fas fa-heart"></i> Rituel Duo</h3>
          <p>Parenthèse bien-être à partager à deux.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Hammam privatif</li>
            <li><i class="fas fa-check"></i> Massage en duo</li>
            <li><i class="fas fa-check"></i> Champagne offert</li>
          </ul>
          <div class="service-price">240€ <span class="service-duration">(2h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Forfait Journée Spa -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Premium</div>
        <div class="service-content">
          <h3><i class="fas fa-star"></i> Journée Spa</h3>
          <p>Une journée complète de soins et détente.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> 3 soins au choix</li>
            <li><i class="fas fa-check"></i> Déjeuner bien-être</li>
            <li><i class="fas fa-check"></i> Accès illimité spa</li>
          </ul>
          <div class="service-price">290€ <span class="service-duration">(Journée)</span></div>
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

      <!-- Rituel Balinais -->
      <div class="service-item" data-category="rituel">
        <div class="service-badge">Exotique</div>
        <div class="service-content">
          <h3><i class="fas fa-umbrella-beach"></i> Rituel Balinais</h3>
          <p>Voyage sensoriel aux traditions indonésiennes.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage aux épices</li>
            <li><i class="fas fa-check"></i> Enveloppement au riz</li>
            <li><i class="fas fa-check"></i> Massage balinais</li>
          </ul>
          <div class="service-price">180€ <span class="service-duration">(2h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Ayurvédique -->
      <div class="service-item" data-category="rituel">
        <div class="service-content">
          <h3><i class="fas fa-om"></i> Rituel Ayurvédique</h3>
          <p>Expérience holistique inspirée de l'Inde ancestrale.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Massage Abhyanga</li>
            <li><i class="fas fa-check"></i> Shirodhara</li>
            <li><i class="fas fa-check"></i> Réflexologie indienne</li>
          </ul>
          <div class="service-price">195€ <span class="service-duration">(2h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Forfait Détox -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Bien-être</div>
        <div class="service-content">
          <h3><i class="fas fa-leaf"></i> Forfait Détox</h3>
          <p>Programme complet pour purifier corps et esprit.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage détoxifiant</li>
            <li><i class="fas fa-check"></i> Enveloppement aux algues</li>
            <li><i class="fas fa-check"></i> Massage drainant</li>
          </ul>
          <div class="service-price">210€ <span class="service-duration">(3h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Polynésien -->
      <div class="service-item" data-category="rituel">
        <div class="service-content">
          <h3><i class="fas fa-water"></i> Rituel Polynésien</h3>
          <p>Évasion tropicale pour une relaxation profonde.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Gommage au sable fin</li>
            <li><i class="fas fa-check"></i> Massage Lomi-Lomi</li>
            <li><i class="fas fa-check"></i> Hydratation au monoï</li>
          </ul>
          <div class="service-price">165€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Forfait Duo Romantique -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Romance</div>
        <div class="service-content">
          <h3><i class="fas fa-heart"></i> Duo Romantique</h3>
          <p>Moment privilégié à partager en couple.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Spa privatif aux pétales</li>
            <li><i class="fas fa-check"></i> Massage en duo</li>
            <li><i class="fas fa-check"></i> Champagne et mignardises</li>
          </ul>
          <div class="service-price">290€ <span class="service-duration">(2h30)</span></div>
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
