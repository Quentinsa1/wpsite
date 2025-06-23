<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

// Pages publiques du site
Route::get('/a-propos', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/services', [ServiceController::class, 'index'])->name('website.services.index');
Route::get('/actualites', [ActualiteController::class, 'index'])->name('website.actualites.index');
Route::get('/blog', [BlogController::class, 'index'])->name('website.blogs.index');
Route::get('/emplois', [JobController::class, 'index'])->name('website.jobs.index');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');

// Espace sécurisé
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes resource pour l'administration avec nommage
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('actualites', ActualiteController::class)->except(['show']);
        Route::resource('blogs', BlogController::class)->except(['show']);
        Route::resource('emplois', JobController::class)->except(['show']);
    });

    // Gestion du profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';