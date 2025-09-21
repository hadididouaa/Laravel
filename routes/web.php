<?php

use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Exercice 1 - Route pour le conseiller avec middleware
Route::get('/advisor', [AdvisorController::class, 'show'])
    ->middleware('checkAge')
    ->name('advisor');

// Route pour le refus d'accès
Route::get('/access-refuse', function () {
    return view('access-refuse');
})->name('access-refuse');

// Exercice 2 - Route pour les articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');