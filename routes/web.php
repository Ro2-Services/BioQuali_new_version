<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/analyses', [FrontendController::class, 'analyses'])->name('analyses');
Route::get('/article', [FrontendController::class, 'article'])->name('article');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/equipements', [FrontendController::class, 'equipements'])->name('equipements');

Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/index', [FrontendController::class, 'index'])->name('index');

Route::get('/realisation', [FrontendController::class, 'realisation'])->name('realisation');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/skill', [FrontendController::class, 'skill'])->name('skill');
Route::get('/tests', [FrontendController::class, 'tests'])->name('tests');




Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/products/index', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/show/{product}', [AdminProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('/products/destroy/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');
});




// Route::prefix('admin')->middleware('auth')->group(function {
//     Route::get('/products/index', [AdminProductController::class, 'index'])->name('products.index');
//     Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
//     Route::post('/products/store', [AdminProductController::class, 'store'])->name('products.store');
//     Route::get('/products/show/{product}', [AdminProductController::class, 'show'])->name('products.show');
//     Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
//     Route::put('/products/update/{product}', [AdminProductController::class, 'update'])->name('products.update');
//     Route::delete('/products/destroy/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

// });








//LES ROUTES ADMIN

// ==================== ROUTES D'AUTHENTIFICATION ====================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        // Rediriger vers le dashboard admin si l'utilisateur est admin
        if (Auth::user()->role === 'admin') {
            return redirect('/admin/dashboard');
        }
        
        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'Les identifiants sont incorrects.',
    ]);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Routes pour les nouvelles fonctionnalités
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard principal
    Route::get('/dashboard', function () {
        if (Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Accès non autorisé.');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Gestion des analyses médicales
    Route::get('/analyses', function () {
        return "Gestion des analyses médicales - À implémenter";
    });
    
    Route::post('/analyses/{id}/rejeter', function ($id) {
        // Logique pour rejeter une analyse
        return back()->with('success', 'Analyse rejetée avec succès');
    });
    
    Route::delete('/analyses/{id}', function ($id) {
        // Logique pour supprimer une analyse
        return back()->with('success', 'Analyse supprimée avec succès');
    });
    
    // Gestion des équipements
    Route::get('/equipements', function () {
        return "Gestion des équipements - À implémenter";
    });
    
    // Gestion des commandes et livraisons
    Route::get('/commandes', function () {
        return "Gestion des commandes - À implémenter";
    });
    
    Route::get('/livraisons', function () {
        return "Gestion des livraisons - À implémenter";
    });
});