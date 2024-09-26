<?php

use App\Http\Controllers\CateringController;
use App\Http\Controllers\FidelityController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::redirect('/home', '/');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::prefix('menu')->group(function() {
    Route::get('burgers', [MenuController::class, 'burgers'])->name('menu.burgers');
    Route::get('burgers/{burger}', [MenuController::class, 'show'])->name('menu.burgers.show');
    Route::get('snacks', [MenuController::class, 'snacks'])->name('menu.snacks');
    Route::get('drinks', [MenuController::class, 'drinks'])->name('menu.drinks');
});

Route::get('/catering', [CateringController::class, 'index'])->name('catering');

Route::middleware('auth')->group(function () {
    Route::get('/fidelity', [FidelityController::class, 'index'])->name('fidelity');
});

Route::get('/datenschutz', function () {
    return view('docs.datenschutz');
})->name('datenschutz');

Route::get('/impressum', function () {
    return view('docs.impressum');
})->name('impressum');

Route::get('/agb', function () {
    return view('docs.agb');
})->name('agb');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
