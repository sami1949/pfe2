<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Client\ContactControllerClient;
use App\Http\Controllers\Client\AvisController;
use App\Http\Controllers\Client\ServiceController;
use App\Http\Controllers\ProductControllerClient;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartViewController;
use App\Http\Controllers\CheckoutController;





Route::get('/', function () {
    return view('client.home.index');
})->name('welcome');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Souhail est ajouté cette partie🐱‍👤
Route::middleware(['auth','admin'])->group(function (){

    Route::get('admin/dashboard',[HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/products',[ProductController::class, 'index'])->name('admin.products');
    Route::get('admin/users',[UsersController::class, 'index'])->name('admin.users');
    Route::get('admin/income',[IncomeController::class, 'index'])->name('admin.income');
    Route::get('admin/orders',[OrdersController::class, 'index'])->name('admin.orders');
    Route::get('admin/services',[ServicesController::class, 'index'])->name('admin.services');
    Route::get('admin/appointment',[AppointmentController::class, 'index'])->name('admin.appointment');

    // 🛠 Routes pour modifier et supprimer un service
    Route::get('admin/services/create', [ServicesController::class, 'create'])->name('admin.services.create');
    Route::post('admin/services', [ServicesController::class, 'store'])->name('admin.services.store');
    Route::get('admin/services/{service}/edit', [ServicesController::class, 'edit'])->name('admin.services.edit');
    Route::put('admin/services/{service}', [ServicesController::class, 'update'])->name('admin.services.update');
    Route::delete('admin/services/{service}', [ServicesController::class, 'destroy'])->name('admin.services.destroy');

    // 🛠 Routes pour modifier et supprimer un rendez-vous
    Route::get('admin/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('admin.appointment.edit');
    Route::put('admin/appointments/{id}', [AppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::delete('admin/appointments/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointment.destroy');

    // 🛠 Routes pour modifier et supprimer un commande
    Route::delete('admin/orders/{order}', [OrdersController::class, 'destroy'])->name('admin.orders.destroy');
    Route::get('admin/orders/{order}/edit', [OrdersController::class, 'edit'])->name('admin.orders.edit');
    Route::put('admin/orders/{order}', [OrdersController::class, 'update'])->name('admin.orders.update');

    // 🛠 Routes pour modifier et supprimer un utilisateur
    Route::get('admin/users/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create_employee');
    Route::post('/admin/users', [UsersController::class, 'store'])->name('admin.users.store');

    // 🛠 Routes CRUD pour les produits
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create_product');
    Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // Routes pour la gestion des catégories
    Route::get('admin/categories', [ServiceCategoryController::class, 'index'])->name('admin.categories');
    Route::get('admin/categories/create', [ServiceCategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('admin/categories', [ServiceCategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('admin/categories/{category}/edit', [ServiceCategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('admin/categories/{category}', [ServiceCategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('admin/categories/{category}', [ServiceCategoryController::class, 'destroy'])->name('admin.categories.destroy');
});

// Routes publiques
Route::get('/', function () {
    return view('client.home.index');
})->name('welcome');

// Routes pour le contact et les avis (accessibles à tous)
Route::get('/contact', [ContactControllerClient::class, 'index'])->name('contact');
Route::post('/contact', [ContactControllerClient::class, 'store'])->name('contact.store');
Route::post('/avis', [AvisController::class, 'store'])->name('avis.store');

// Route de la galerie (accessible à tous)
// Routes publiques (non authentifiées)
Route::get('/gallerie', [App\Http\Controllers\Client\GalleryControllerClient::class, 'index'])
     ->name('gallery.public');

// Routes authentifiées
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientt/gallerie', [App\Http\Controllers\Client\GalleryControllerClient::class, 'index'])
         ->name('galleryClient');
});

Route::get('/clientt', function () {
    return view('client.home.index');
})->middleware(['auth', 'verified'])->name('clientt');

// Routes pour la partie client
Route::middleware(['auth', 'client'])->group(function () {
    // Page d'accueil client
    Route::get('/client/home', [App\Http\Controllers\Client\HomeController::class, 'index'])->name('client.home');
    
    // Routes pour les services
    Route::get('/client/services', [App\Http\Controllers\Client\ServiceController::class, 'index'])->name('serviceClient');
    
    // Routes pour les produits
    Route::get('/client/products', [App\Http\Controllers\Client\ProductController::class, 'index'])->name('productClient');
    
    // Routes pour le contact
    Route::get('/client/contact', [ContactControllerClient::class, 'index'])->name('contactClient');

    // Routes authentifiées pour les services
    Route::get('/clientt/services/femme', [ServiceController::class, 'femme'])->name('servicefemme.auth');
    Route::get('/clientt/services/homme', [ServiceController::class, 'homme'])->name('servicehomme.auth');
});

// Routes publiques pour les services (non authentifiées)
Route::get('/services/femme', [ServiceController::class, 'femme'])->name('servicefemme');
Route::get('/services/homme', [ServiceController::class, 'homme'])->name('servicehomme');

// Routes pour les catégories de services femme
Route::get('/services/femme/coiffure', [ServiceController::class, 'coiffure'])->name('coiffure');
Route::get('/services/femme/maquillage', [ServiceController::class, 'maquillage'])->name('maquillage');
Route::get('/services/femme/soins-visage', [ServiceController::class, 'soinsvisage'])->name('soinsvisage');
Route::get('/services/femme/epilation', [ServiceController::class, 'epilation'])->name('epilation');
Route::get('/services/femme/hamam', [ServiceController::class, 'hamam'])->name('hamam');
Route::get('/services/femme/mariage', [ServiceController::class, 'mariage'])->name('mariage');
Route::get('/services/femme/massage', [ServiceController::class, 'massage'])->name('massage');
Route::get('/services/femme/regard', [ServiceController::class, 'regard'])->name('regard');
Route::get('/services/femme/soins-main', [ServiceController::class, 'soinsmain'])->name('soinsmain');
Route::get('/services/femme/soins-corps', [ServiceController::class, 'soinscorps'])->name('soinscorps');
Route::get('/services/femme/soins-pieds', [ServiceController::class, 'soinspieds'])->name('soinspieds');
Route::get('/services/femme/spa', [ServiceController::class, 'spa'])->name('spa');
Route::get('/services/femme/voilee', [ServiceController::class, 'voilee'])->name('voilee');
Route::get('/services/femme/fille', [ServiceController::class, 'fille'])->name('fille');

// Routes pour les astuces beauté
Route::get('/astuces/tutos', function () {
    return view('client.astuces.description');
})->name('tutos.description');

Route::get('/astuces/unboxing', function () {
    return view('client.astuces.description');
})->name('unboxing.description');

Route::get('/astuces/inspiration', function () {
    return view('client.astuces.description');
})->name('inspiration.description');

Route::get('/astuces/tendances', function () {
    return view('client.astuces.description');
})->name('tendances.description');

Route::get('/astuces', function () {
    return view('client.astuces.description');
})->name('astuces.all');




// Public product routes (no auth required)
Route::get('/clientt/product', [ProductControllerClient::class, 'index'])->name('productClient');
Route::get('/product', [ProductControllerClient::class, "index"])->name('product.public');
Route::get('/product/{gender?}', [ProductControllerClient::class, "index"])
    ->where(['gender' => 'homme|femme'])
    ->name('product.public.gender');
Route::get('/product/{gender}/{category}', [ProductControllerClient::class, "index"])
    ->where(['gender' => 'homme|femme'])
    ->name('product.public.category');
Route::get('/product/{gender}/{category}/{subcategory}', [ProductControllerClient::class, "index"])
    ->where(['gender' => 'homme|femme'])
    ->name('product.public.subcategory');

// Authenticated product routes
Route::middleware('auth')->group(function () {
    Route::get('/clientt/products', [ProductControllerClient::class, "index"])->name('product.private');
    Route::get('/clientt/products/{gender?}', [ProductControllerClient::class, "index"])
        ->where(['gender' => 'homme|femme'])
        ->name('product.private.gender');
    Route::get('/client/products/{gender}/{category}', [ProductControllerClient::class, "index"])
        ->where(['gender' => 'homme|femme'])
        ->name('product.private.category');
    Route::get('/clientt/products/{gender}/{category}/{subcategory}', [ProductControllerClient::class, "index"])
        ->where(['gender' => 'homme|femme'])
        ->name('product.private.subcategory');
    
    // Cart routes
    Route::get('/cart', [CartViewController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
    Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
    Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
    Route::put('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update-quantity');

    // Checkout routes
    Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/success/{order}', [CheckoutController::class, 'success'])->name('checkout.success');
});

require __DIR__.'/auth.php';

