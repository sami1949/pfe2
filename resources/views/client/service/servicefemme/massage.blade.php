@extends('layouts.service')

@section('title', 'Massages Bien-être')
@section('description', 'Découvrez nos massages bien-être chez EleganceVibe. Une gamme complète de massages relaxants et thérapeutiques pour votre détente.')

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
      <source src="{{ asset('images/massage.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Massages Bien-être</h1>
      <p>Un voyage sensoriel pour corps et esprit</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Massages</h2>
      <p>Découvrez notre sélection de massages thérapeutiques et relaxants, adaptés à vos besoins et envies.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="relaxant">Relaxants</button>
      <button class="category-btn" data-category="therapeutique">Thérapeutiques</button>
      <button class="category-btn" data-category="energetique">Énergétiques</button>
      <button class="category-btn" data-category="specifique">Spécifiques</button>
    </div>

    <div class="service-grid">
      <!-- Massage Californien -->
      <div class="service-item" data-category="relaxant">
        <div class="service-badge">Best Seller</div>
        <div class="service-content">
          <h3><i class="fas fa-feather"></i> Massage Californien</h3>
          <p>Massage relaxant par excellence pour une détente profonde.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Mouvements fluides</li>
            <li><i class="fas fa-check"></i> Huiles essentielles</li>
            <li><i class="fas fa-check"></i> Détente musculaire</li>
          </ul>
          <div class="service-price">85€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Massage Deep Tissue -->
      <div class="service-item" data-category="therapeutique">
        <div class="service-badge">Intense</div>
        <div class="service-content">
          <h3><i class="fas fa-hand-rock"></i> Deep Tissue</h3>
          <p>Massage profond pour soulager les tensions musculaires.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Pressions appuyées</li>
            <li><i class="fas fa-check"></i> Décontraction profonde</li>
            <li><i class="fas fa-check"></i> Récupération musculaire</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Massage Shiatsu -->
      <div class="service-item" data-category="energetique">
        <div class="service-content">
          <h3><i class="fas fa-yin-yang"></i> Shiatsu</h3>
          <p>Massage énergétique japonais par pressions.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Rééquilibrage énergétique</li>
            <li><i class="fas fa-check"></i> Points d'acupression</li>
            <li><i class="fas fa-check"></i> Harmonisation corps-esprit</li>
          </ul>
          <div class="service-price">90€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Massage Femme Enceinte -->
      <div class="service-item" data-category="specifique">
        <div class="service-badge">Spécialisé</div>
        <div class="service-content">
          <h3><i class="fas fa-baby"></i> Future Maman</h3>
          <p>Massage adapté à la grossesse pour un moment de détente unique.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Position confortable</li>
            <li><i class="fas fa-check"></i> Gestes adaptés</li>
            <li><i class="fas fa-check"></i> Huiles spécifiques</li>
          </ul>
          <div class="service-price">95€ <span class="service-duration">(1h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Massage aux Pierres Chaudes -->
      <div class="service-item" data-category="relaxant">
        <div class="service-content">
          <h3><i class="fas fa-fire"></i> Pierres Chaudes</h3>
          <p>Alliance du massage manuel et des pierres volcaniques chaudes.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Détente profonde</li>
            <li><i class="fas fa-check"></i> Chaleur bienfaisante</li>
            <li><i class="fas fa-check"></i> Décontraction totale</li>
          </ul>
          <div class="service-price">100€ <span class="service-duration">(1h15)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Réflexologie Plantaire -->
      <div class="service-item" data-category="therapeutique">
        <div class="service-content">
          <h3><i class="fas fa-shoe-prints"></i> Réflexologie</h3>
          <p>Stimulation des zones réflexes des pieds.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Rééquilibrage énergétique</li>
            <li><i class="fas fa-check"></i> Détente profonde</li>
            <li><i class="fas fa-check"></i> Stimulation des organes</li>
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
