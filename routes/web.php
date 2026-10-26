<?php

use App\Http\Controllers\FounderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/testimonials', [TestimonyController::class, 'index'])->name('testimonies.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/people-behind-2-derajat', [FounderController::class, 'index'])->name('founders.index');