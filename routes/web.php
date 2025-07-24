<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

// Pages publiques du site
Route::get('/a-propos', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/actualites', [WebsiteController::class, 'actualiteindex'])->name('website.actualites.index');
Route::get('/blog', [WebsiteController::class, 'postindex'])->name('website.blogs.index');
Route::get('/blog/{post}', [WebsiteController::class, 'show'])->name('website.blogs.show');

//route Jobs
Route::get('/services', [WebsiteController::class, 'serviceindex'])->name('website.services.index');

//route Jobs
Route::get('/emplois', [WebsiteController::class, 'jobindex'])->name('website.jobs.index');

// route 
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');

// Espace sécurisé
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes resource pour l'administration avec nommage
    Route::name('admin.')->prefix('admin')->group(function () {
       
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('actualites', ActualiteController::class);
        Route::resource('blogs', BlogController::class)->except(['show']);
        Route::resource('emplois', JobController::class)->except(['show']);

        Route::resource('posts', PostController::class);


    });

    // Gestion du profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';