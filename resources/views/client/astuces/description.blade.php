@extends('layouts.main')

@section('title', 'Description des Astuces')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-white to-amber-50">
    <!-- En-tête de la page -->
    <div class="bg-amber-900 text-white py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-playfair mb-4 text-center">Découvrez Nos Astuces Beauté</h1>
            <p class="text-lg text-center max-w-3xl mx-auto">Des conseils personnalisés pour hommes et femmes, des tutoriels vidéo et des astuces exclusives</p>
        </div>
    </div>

    <!-- Section Femmes -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-playfair text-amber-900 mb-12 text-center">Astuces pour Femmes</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Maquillage du Jour -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Maquillage du Jour" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Maquillage du Jour</h3>
                        <p class="text-gray-600 mb-4">Un maquillage naturel et élégant pour votre quotidien</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>15 min</span>
                            <span><i class="far fa-eye mr-2"></i>2.5M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Soin de la Peau -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Routine de Soin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Routine de Soin</h3>
                        <p class="text-gray-600 mb-4">Une routine complète pour une peau éclatante</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>20 min</span>
                            <span><i class="far fa-eye mr-2"></i>1.8M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Coiffure Tendance -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Coiffure Tendance" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Coiffure Tendance</h3>
                        <p class="text-gray-600 mb-4">Les coiffures les plus en vogue cette saison</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>12 min</span>
                            <span><i class="far fa-eye mr-2"></i>1.2M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Maquillage de Soirée -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Maquillage de Soirée" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Maquillage de Soirée</h3>
                        <p class="text-gray-600 mb-4">Un look glamour pour vos soirées</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>18 min</span>
                            <span><i class="far fa-eye mr-2"></i>3.1M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Soin des Cheveux -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Soin des Cheveux" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Soin des Cheveux</h3>
                        <p class="text-gray-600 mb-4">Routine complète pour des cheveux en bonne santé</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>15 min</span>
                            <span><i class="far fa-eye mr-2"></i>2.8M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Ongles et Manucure -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Ongles et Manucure" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Ongles et Manucure</h3>
                        <p class="text-gray-600 mb-4">Techniques professionnelles pour des mains parfaites</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>10 min</span>
                            <span><i class="far fa-eye mr-2"></i>1.5M vues</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Hommes -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-playfair text-amber-900 mb-12 text-center">Astuces pour Hommes</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Routine de Soin Homme -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Routine de Soin Homme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Routine de Soin Homme</h3>
                        <p class="text-gray-600 mb-4">Une routine simple et efficace pour votre peau</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>12 min</span>
                            <span><i class="far fa-eye mr-2"></i>950k vues</span>
                        </div>
                    </div>
                </div>

                <!-- Coiffure Homme -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Coiffure Homme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Coiffure Homme</h3>
                        <p class="text-gray-600 mb-4">Les meilleures techniques pour une coiffure parfaite</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>10 min</span>
                            <span><i class="far fa-eye mr-2"></i>1.2M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Barbe et Entretien -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Barbe et Entretien" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Barbe et Entretien</h3>
                        <p class="text-gray-600 mb-4">Guide complet pour une barbe parfaite</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>15 min</span>
                            <span><i class="far fa-eye mr-2"></i>800k vues</span>
                        </div>
                    </div>
                </div>

                <!-- Soin du Visage Homme -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Soin du Visage Homme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Soin du Visage Homme</h3>
                        <p class="text-gray-600 mb-4">Routine complète pour une peau saine et éclatante</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>14 min</span>
                            <span><i class="far fa-eye mr-2"></i>1.1M vues</span>
                        </div>
                    </div>
                </div>

                <!-- Style et Mode Homme -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Style et Mode Homme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Style et Mode Homme</h3>
                        <p class="text-gray-600 mb-4">Conseils pour un style moderne et élégant</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>16 min</span>
                            <span><i class="far fa-eye mr-2"></i>900k vues</span>
                        </div>
                    </div>
                </div>

                <!-- Soin des Cheveux Homme -->
                <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/7YXXt_3q2cU" title="Soin des Cheveux Homme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-playfair text-amber-900 mb-3">Soin des Cheveux Homme</h3>
                        <p class="text-gray-600 mb-4">Techniques et produits pour des cheveux en bonne santé</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="far fa-clock mr-2"></i>13 min</span>
                            <span><i class="far fa-eye mr-2"></i>750k vues</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Description -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-playfair text-amber-900 mb-8 text-center">Nos Conseils d'Experts</h2>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                    <h3 class="text-2xl font-playfair text-amber-900 mb-4">Pour les Femmes</h3>
                    <p class="text-gray-600 mb-6">
                        Découvrez nos conseils personnalisés pour sublimer votre beauté naturelle. Nos experts partagent leurs secrets pour un maquillage parfait, une peau éclatante et un style unique.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Techniques de maquillage adaptées à votre type de peau</li>
                        <li>Routines de soin personnalisées</li>
                        <li>Conseils pour choisir les bons produits</li>
                        <li>Astuces pour un style unique</li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-playfair text-amber-900 mb-4">Pour les Hommes</h3>
                    <p class="text-gray-600 mb-6">
                        Prenez soin de votre apparence avec nos conseils adaptés aux hommes modernes. Des routines simples et efficaces pour une peau saine et un style soigné.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Routines de soin essentielles</li>
                        <li>Conseils pour une barbe parfaite</li>
                        <li>Techniques de coiffure tendance</li>
                        <li>Astuces pour un style soigné</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-amber-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-playfair text-white mb-6">Prêt à Révéler Votre Beauté ?</h2>
            <p class="text-white/90 mb-8 max-w-2xl mx-auto">
                Rejoignez notre communauté et accédez à plus de conseils et astuces beauté personnalisés.
            </p>
            <a href="{{ route('contactClient') }}" class="inline-block px-8 py-4 bg-white text-amber-900 font-medium rounded-full hover:bg-amber-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                PRENDRE RENDEZ-VOUS
            </a>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
.aspect-w-16 {
    position: relative;
    padding-bottom: 56.25%;
}

.aspect-w-16 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
@endsection 