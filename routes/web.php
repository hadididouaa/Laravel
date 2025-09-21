<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return redirect()->route('dashboard');
});