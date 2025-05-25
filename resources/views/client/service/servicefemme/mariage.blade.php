@extends('layouts.service')

@section('title', 'Services Mariage')
@section('description', 'Découvrez nos services mariage chez EleganceVibe. Des prestations sur-mesure pour sublimer la mariée et son entourage le jour J.')

@section('styles')
<style>
  /* ... Styles existants ... */
</style>
@endsection

@section('content')
  <div class="service-header">
    <video autoplay muted loop playsinline>
      <source src="{{ asset('images/mariage.mp4') }}" type="video/mp4">
    </video>
    <div class="service-header-content">
      <h1>Services Mariage</h1>
      <p>Pour un jour J d'exception</p>
    </div>
  </div>

  <div class="service-container">
    <div class="service-intro">
      <h2>Nos Prestations Mariage</h2>
      <p>Des services personnalisés pour sublimer la mariée et son entourage, du premier essai jusqu'au jour J.</p>
    </div>

    <div class="service-categories">
      <button class="category-btn active" data-category="all">Tous</button>
      <button class="category-btn" data-category="forfait">Forfaits</button>
      <button class="category-btn" data-category="beaute">Beauté</button>
      <button class="category-btn" data-category="coiffure">Coiffure</button>
      <button class="category-btn" data-category="detente">Détente</button>
    </div>

    <div class="service-grid">
      <!-- Forfait Mariée Complet -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Best Seller</div>
        <div class="service-content">
          <h3><i class="fas fa-crown"></i> Forfait Mariée Premium</h3>
          <p>Forfait complet pour une préparation parfaite.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Essai maquillage & coiffure</li>
            <li><i class="fas fa-check"></i> Soin visage pré-mariage</li>
            <li><i class="fas fa-check"></i> Mise en beauté jour J</li>
          </ul>
          <div class="service-price">450€ <span class="service-duration">(Pack)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Mise en Beauté Jour J -->
      <div class="service-item" data-category="beaute">
        <div class="service-badge">Essentiel</div>
        <div class="service-content">
          <h3><i class="fas fa-magic"></i> Mise en Beauté Mariée</h3>
          <p>Maquillage professionnel longue tenue pour le jour J.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Maquillage personnalisé</li>
            <li><i class="fas fa-check"></i> Faux-cils inclus</li>
            <li><i class="fas fa-check"></i> Tenue garantie</li>
          </ul>
          <div class="service-price">150€ <span class="service-duration">(1h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Coiffure Mariée -->
      <div class="service-item" data-category="coiffure">
        <div class="service-content">
          <h3><i class="fas fa-heart"></i> Coiffure Mariée</h3>
          <p>Coiffure de mariée sur-mesure avec essai.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Essai inclus</li>
            <li><i class="fas fa-check"></i> Pose accessoires</li>
            <li><i class="fas fa-check"></i> Fixation longue durée</li>
          </ul>
          <div class="service-price">180€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Forfait Demoiselle d'Honneur -->
      <div class="service-item" data-category="forfait">
        <div class="service-content">
          <h3><i class="fas fa-gem"></i> Forfait Demoiselle d'Honneur</h3>
          <p>Mise en beauté complète pour l'entourage de la mariée.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Maquillage</li>
            <li><i class="fas fa-check"></i> Coiffure</li>
            <li><i class="fas fa-check"></i> Manucure express</li>
          </ul>
          <div class="service-price">160€ <span class="service-duration">(2h)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- Rituel Détente Pré-Mariage -->
      <div class="service-item" data-category="detente">
        <div class="service-badge">Relaxation</div>
        <div class="service-content">
          <h3><i class="fas fa-spa"></i> Rituel Pré-Mariage</h3>
          <p>Moment de détente avant le grand jour.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Massage relaxant</li>
            <li><i class="fas fa-check"></i> Soin visage</li>
            <li><i class="fas fa-check"></i> Manucure spa</li>
          </ul>
          <div class="service-price">190€ <span class="service-duration">(2h30)</span></div>
          <a href="#" class="btn-reserver">Réserver</a>
        </div>
      </div>

      <!-- EVJF -->
      <div class="service-item" data-category="forfait">
        <div class="service-badge">Groupe</div>
        <div class="service-content">
          <h3><i class="fas fa-glass-cheers"></i> Forfait EVJF</h3>
          <p>Une journée spa entre amies avant le mariage.</p>
          <ul class="service-features">
            <li><i class="fas fa-check"></i> Accès spa privatif</li>
            <li><i class="fas fa-check"></i> Soins au choix</li>
            <li><i class="fas fa-check"></i> Champagne offert</li>
          </ul>
          <div class="service-price">90€/pers <span class="service-duration">(Min. 4 pers.)</span></div>
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
