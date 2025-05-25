<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Vibe - Espace Homme</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary: #f59e0b;  /* Ambre pour les boutons */
            --secondary: #92400e; /* Ambre foncé */
            --dark: #1f2937;     /* Gris foncé */
            --light: #fffbeb;    /* Ambre très clair pour arrière-plan */
            --accent: #d97706;   /* Ambre accent */
            --text: #374151;     /* Gris foncé pour le texte */
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lora', serif;
            color: var(--text);
            line-height: 1.6;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            align-items: center;
            min-height: 90vh;
            padding: 20px 3rem 0;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            gap: 4rem;
        }

        .hero-content {
            flex: 1;
            padding-left: 3rem;
            position: relative;
            z-index: 2;
            margin-top: 1rem;
        }

        .hero-image {
            flex: 1.2;
            height: 600px;
            border-radius: 16px;
            background: url('/images/background-homme1.jpeg') center/cover no-repeat;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
            order: -1; /* Place l'image à gauche */
        }

        .hero-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 251, 235, 0.1) 0%, rgba(245, 158, 11, 0.1) 100%);
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            color: var(--text);
        }

        .discover-btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 0.9rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
            position: relative;
            overflow: hidden;
        }

        .discover-btn:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
        }

        .discover-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 0%, rgba(255, 255, 255, 0.3) 100%);
            transform: translateX(-100%);
            transition: var(--transition);
        }

        .discover-btn:hover::after {
            transform: translateX(0);
        }

        /* Services Section */
        .services-section {
            padding: 6rem 3rem;
            display: none;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 500;
            color: var(--secondary);
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3.5rem;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border: 1px solid rgba(245, 158, 11, 0.2);
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(245, 158, 11, 0.12);
        }

        .service-img {
            height: 280px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 1.5rem;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .service-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .service-content p {
            color: var(--text);
            margin-bottom: 1.5rem;
            font-size: 1rem;
            line-height: 1.6;
            flex: 1;
        }

        .service-btn {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
            align-self: center;
            margin-top: auto;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(146, 64, 14, 0.2);
        }

        .service-btn:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(146, 64, 14, 0.3);
        }

        /* Search Section */
        .search-section {
            padding: 0 0 4rem 0;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .search-container {
            position: relative;
            margin-top: 0;
        }

        .search-input {
            width: 100%;
            padding: 1rem 3rem;
            border: 2px solid var(--secondary);
            border-radius: 30px;
            font-size: 1rem;
            background-color: white;
            transition: var(--transition);
            color: var(--dark);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 15px rgba(245, 158, 11, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary);
            font-size: 1.2rem;
        }

        .search-input::placeholder {
            color: #999;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 992px) {
            .hero-section {
                flex-direction: column;
                padding-top: 100px;
                text-align: center;
                gap: 2rem;
            }

            .hero-content {
                padding-left: 0;
                margin-bottom: 3rem;
            }

            .hero-image {
                width: 100%;
                height: 450px;
                order: 0;
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 1rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .hero-content h1 {
                font-size: 2.3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }
            
            .service-img {
                height: 240px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 100px 1.5rem 0;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .services-section {
                padding: 5rem 1.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
            
            .service-img {
                height: 220px;
            }
        }

        /* Ajout d'un espace avant le footer */
        .footer-spacer {
            height: 6rem;
            width: 100%;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Bienvenue dans votre espace homme</h1>
            <p style="margin-bottom: 0; max-width: 600px; text-align: justify; line-height: 1.8;">Dans un cadre discret et élégant, notre espace homme vous propose des prestations spécialement conçues pour répondre aux besoins de l'homme moderne. Profitez de coupes stylées, tailles de barbe, soins du visage, hammam, massages relaxants et soins du corps réalisés par des professionnels expérimentés. Que ce soit pour une pause détente ou pour soigner votre apparence, nous mettons tout en œuvre pour vous offrir un moment de confort, de confiance et d'élégance. Découvrez notre gamme complète de services :</p>
            <ul style="list-style: none; margin: 0 0 2rem 0;">
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Coiffure & Soins Capillaires</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Soins du Visage</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Massages Détente & Sportif</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Hammam Traditionnel</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Soins du Corps</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Espace Spa Homme</li>
                <li><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Prestation Barbier</li>
            </ul>
            <a href="#" class="discover-btn" id="discoverBtn">Découvrir nos services</a>
        </div>
        <div class="hero-image"></div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="servicesSection">
        <div class="section-header">
            <h2 class="section-title">Nos Prestations Homme</h2>
            <p class="section-subtitle">Des soins techniques et sur-mesure pour répondre aux besoins spécifiques de la peau et des cheveux masculins</p>
        </div>

        <!-- Ajout de la barre de recherche -->
        <div class="search-section">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" id="searchServices" class="search-input" placeholder="Rechercher un service...">
            </div>
        </div>

        <div class="services-container">
            <!-- Coiffure -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/coiffure-homme.jpeg" alt="Coiffure homme">
                </div>
                <div class="service-content">
                    <h3>Coiffure & Soins Capillaires</h3>
                    <p>Coupes tendance, coiffage précis et soins capillaires adaptés à chaque type de cheveux. Offrez à vos cheveux style, force et éclat dans un espace 100% masculin.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
            <!-- Soins Visage -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/soin-visage-homme.jpeg" alt="Soins du visage homme">
                </div>
                <div class="service-content">
                    <h3>Soins du Visage</h3>
                    <p>Nettoyage profond, hydratation intensive et soins anti-âge adaptés aux peaux masculines. Nos protocoles ciblent les problèmes spécifiques (rasage, pores dilatés...).</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
            <!-- Massage -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/massage-homme.jpeg" alt="Massage homme">
                </div>
                <div class="service-content">
                    <h3>Massages Détente & Sportif</h3>
                    <p>Massages thérapeutiques pour soulager les tensions musculaires ou simples moments de relaxation. Nos praticiens adaptent la pression à vos besoins.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
         
           
            
            <!-- Hammam -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/Hamam.jpeg" alt="Hammam">
                </div>
                <div class="service-content">
                    <h3>Hammam Traditionnel</h3>
                    <p>Expérience authentique avec savon noir, gommage au gant kessa et vapeur purifiante.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
          
            
            <!-- Corps -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/soin-corps-homme.jpeg" alt="Soins du corps homme">
                </div>
                <div class="service-content">
                    <h3>Soins du Corps</h3>
                    <p>Gommage corporel, enveloppement minceur ou hydratant, modelage drainant. Nos soins ciblent spécifiquement la peau masculine, plus épaisse et grasse.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
            <!-- Spa -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/spa.jpeg" alt="Spa homme">
                </div>
                <div class="service-content">
                    <h3>Espace Spa Homme</h3>
                    <p>Rituels bien-être exclusifs : hammam, sauna, bain vapeur et soins relaxants dans un espace dédié à la détente masculine.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
            <!-- Barbier -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/barbre-homme.jpeg" alt="Prestation barbier">
                </div>
                <div class="service-content">
                    <h3>Prestation Barbier</h3>
                    <p>Rasage traditionnel au blaireau avec serviette chaude, modelage du visage et soin après-rasage. Une expérience authentique pour une peau parfaite.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/dri.jpeg" alt="Forfait mariage homme">
                </div>
                <div class="service-content">
                    <h3> Enfants: Garçons</h3>
                    <p>Des soins adaptés aux petits garçons : coupe stylée, mini soins visage, massage doux ou moments détente, dans un cadre sécurisé et amusant. Idéal pour se sentir frais, propre et bien dans sa peau.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
         
            
            <!-- Forfait Mariage -->
            <div class="service-card">
                <div class="service-img">
                    <img src="/images/mariage-homme.jpeg" alt="Forfait mariage homme">
                </div>
                <div class="service-content">
                    <h3>Forfait Mariage</h3>
                    <p>Préparation complète pour le grand jour : coupe, rasage, soin du visage et conseils en image. Un accompagnement sur-mesure pour être au top.</p>
                    <button class="service-btn">Détails</button>
                </div>
            </div>
            
          
    </section>

    <div class="footer-spacer"></div>
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const discoverBtn = document.getElementById('discoverBtn');
            const servicesSection = document.getElementById('servicesSection');
            const searchInput = document.getElementById('searchServices');
            
            // Fonction de recherche
            function filterServices() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const serviceCards = document.querySelectorAll('.service-card');

                serviceCards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const description = card.querySelector('p').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            discoverBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Afficher la section services
                servicesSection.style.display = 'block';
                
                // Scroll vers la section
                servicesSection.scrollIntoView({ behavior: 'smooth' });
                
                // Gestion du menu déroulant des services
                const subServices = document.querySelector('.sub-services');
                if (subServices) {
                    subServices.style.display = 'none';
                }
            });

            // Gestion du menu déroulant des services
            if (document.querySelector('[x-data]')?.__x) {
                document.querySelector('[x-data]').__x.$data.showSubServices = false;
            }

            // Événement de recherche
            if (searchInput) {
                searchInput.addEventListener('input', filterServices);
                // Recherche initiale au cas où il y a déjà une valeur
                filterServices();
            }

            // Ajout des événements pour les boutons Détails
            const detailButtons = document.querySelectorAll('.service-btn');
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const serviceTitle = this.closest('.service-content').querySelector('h3').textContent.trim();
                    alert(`Vous avez cliqué sur Détails pour le service : ${serviceTitle}\n\nCette fonctionnalité peut être développée pour afficher plus d'informations ou rediriger vers une page dédiée.`);
                });
            });
        });
    </script>
</body>
</html>