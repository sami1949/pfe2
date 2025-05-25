<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'title' => 'Coiffure & Soins Capillaires',
                'description' => 'Notre salon propose des coupes modernes, des brushings professionnels, des colorations de qualité et des soins capillaires intensifs pour des cheveux resplendissants',
                'category' => 'femme',
                'image_path' => 'images/coiffure.jpg',
                'icon' => 'fas fa-cut',
                'route_name' => 'coiffure',
                'is_active' => true,
                'display_order' => 1
            ],
            [
                'title' => 'Maquillage Professionnel',
                'description' => 'Notre équipe de maquilleurs professionnels vous propose des looks adaptés à chaque occasion : maquillage de jour, soirée, mariage ou événement spécial avec produits haut de gamme',
                'category' => 'femme',
                'image_path' => 'images/maquillage.jpg',
                'icon' => 'fas fa-magic',
                'route_name' => 'maquillage',
                'is_active' => true,
                'display_order' => 2
            ],
            [
                'title' => 'Soins du Visage',
                'description' => 'Rituels personnalisés pour un teint éclatant. Nettoyage profond, gommage, hydratation intensive et masques sur mesure pour un teint lumineux.',
                'category' => 'femme',
                'image_path' => 'images/soin.jpeg',
                'icon' => 'fas fa-face-smile',
                'route_name' => 'soinsvisage',
                'is_active' => true,
                'display_order' => 3
            ],
            [
                'title' => 'Épilation Professionnelle',
                'description' => 'Découvrez notre service d\'épilation à la cire professionnelle. Notre équipe expérimentée utilise des cires de haute qualité pour des résultats parfaits et une peau douce plus longtemps.',
                'category' => 'femme',
                'image_path' => 'images/epiation.jpeg',
                'icon' => 'fas fa-feather',
                'route_name' => 'epilation',
                'is_active' => true,
                'display_order' => 4
            ],
            [
                'title' => 'Hammam Traditionnel',
                'description' => 'Expérience authentique avec savon noir, gommage au gant kessa et vapeur purifiante.',
                'category' => 'femme',
                'image_path' => 'images/Hamam.jpeg',
                'icon' => 'fas fa-steam',
                'route_name' => 'hamam',
                'is_active' => true,
                'display_order' => 5
            ],
            [
                'title' => 'Forfait Mariage',
                'description' => 'Pack complet pour être sublime le jour J. Coiffure, maquillage, soins visage et corps, manucure... un accompagnement beauté complet pour le grand jour.',
                'category' => 'femme',
                'image_path' => 'images/mariage.jpeg',
                'icon' => 'fas fa-ring',
                'route_name' => 'mariage',
                'is_active' => true,
                'display_order' => 6
            ],
            [
                'title' => 'Massages Relaxants',
                'description' => 'Techniques variées pour éliminer le stress. Détendez-vous avec nos massages aux huiles essentielles, pierres chaudes ou californien.',
                'category' => 'femme',
                'image_path' => 'images/massage.jpeg',
                'icon' => 'fas fa-spa',
                'route_name' => 'massage',
                'is_active' => true,
                'display_order' => 7
            ],
            [
                'title' => 'Beauté du Regard',
                'description' => 'Extension de cils, teinture, rehaussement et soins spécifiques pour un regard profond et captivant.',
                'category' => 'femme',
                'image_path' => 'images/regard.jpg',
                'icon' => 'fas fa-eye',
                'route_name' => 'regard',
                'is_active' => true,
                'display_order' => 8
            ],
            [
                'title' => 'Soins des Mains',
                'description' => 'Manucure, vernis semi-permanent, pose de gel et décoration artistique. Nos techniciens ongulaires vous offrent un service complet',
                'category' => 'femme',
                'image_path' => 'images/ongles.jpg',
                'icon' => 'fas fa-hand-sparkles',
                'route_name' => 'soinsmain',
                'is_active' => true,
                'display_order' => 9
            ],
            [
                'title' => 'Soins du Corps',
                'description' => 'Gommage, enveloppement, modelage et hydratation profonde pour revitaliser votre peau.',
                'category' => 'femme',
                'image_path' => 'images/soinscorps.jpeg',
                'icon' => 'fas fa-user',
                'route_name' => 'soinscorps',
                'is_active' => true,
                'display_order' => 10
            ],
            [
                'title' => 'Soins des Pieds',
                'description' => 'Pédicure, vernis semi-permanent et décoration artistique pour des pieds soignés et élégants.',
                'category' => 'femme',
                'image_path' => 'images/pieds.jpeg',
                'icon' => 'fas fa-socks',
                'route_name' => 'soinspieds',
                'is_active' => true,
                'display_order' => 11
            ],
            [
                'title' => 'Espace Spa',
                'description' => 'Rituels de bien-être et détente. Vivez une expérience sensorielle complète avec nos soins spa, enveloppements et hammam dans un cadre zen.',
                'category' => 'femme',
                'image_path' => 'images/spa.jpeg',
                'icon' => 'fas fa-hot-tub',
                'route_name' => 'spa',
                'is_active' => true,
                'display_order' => 12
            ],
            [
                'title' => 'Espace Femmes Voilées',
                'description' => 'Tous les services sont réalisés dans une salle fermée, à l\'abri des regards, avec une équipe féminine uniquement, pour garantir confort et intimité.',
                'category' => 'femme',
                'image_path' => 'images/hijab1.jpeg',
                'icon' => 'fas fa-headscarf',
                'route_name' => 'voilee',
                'is_active' => true,
                'display_order' => 13
            ],
            [
                'title' => 'Espace Filles',
                'description' => 'Services adaptés aux enfants et préadolescentes (4-13 ans), parfaits pour une sortie beauté ou un moment spécial.',
                'category' => 'femme',
                'image_path' => 'images/fille.jpeg',
                'icon' => 'fas fa-child',
                'route_name' => 'fille',
                'is_active' => true,
                'display_order' => 14
            ],
            // Services pour hommes
            [
                'title' => 'Coiffure Homme',
                'description' => 'Coupes tendance, coiffage précis et soins capillaires adaptés à chaque type de cheveux.',
                'category' => 'homme',
                'image_path' => 'images/coiffure-homme.jpeg',
                'icon' => 'fas fa-cut',
                'route_name' => 'coiffure-homme',
                'is_active' => true,
                'display_order' => 1
            ],
            [
                'title' => 'Barbier',
                'description' => 'Taille de barbe, rasage traditionnel et soins pour une barbe impeccable.',
                'category' => 'homme',
                'image_path' => 'images/barbre-homme.jpeg',
                'icon' => 'fas fa-razor',
                'route_name' => 'barbier',
                'is_active' => true,
                'display_order' => 2
            ],
            [
                'title' => 'Soins Visage Homme',
                'description' => 'Soins adaptés à la peau masculine : nettoyage, hydratation et anti-âge.',
                'category' => 'homme',
                'image_path' => 'images/soin-visage-homme.jpeg',
                'icon' => 'fas fa-face-smile',
                'route_name' => 'soins-visage-homme',
                'is_active' => true,
                'display_order' => 3
            ],
            [
                'title' => 'Massage Homme',
                'description' => 'Massages sportifs et relaxants adaptés aux besoins masculins.',
                'category' => 'homme',
                'image_path' => 'images/massage-homme.jpeg',
                'icon' => 'fas fa-spa',
                'route_name' => 'massage-homme',
                'is_active' => true,
                'display_order' => 4
            ]
        ];

        foreach ($categories as $category) {
            ServiceCategory::create([
                'title' => $category['title'],
                'slug' => Str::slug($category['title']),
                'description' => $category['description'],
                'category' => $category['category'],
                'image_path' => $category['image_path'],
                'icon' => $category['icon'],
                'route_name' => $category['route_name'],
                'is_active' => $category['is_active'],
                'display_order' => $category['display_order']
            ]);
        }
    }
} 