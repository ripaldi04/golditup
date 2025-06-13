<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/product', 'product')->name('product');
Route::view('/event', 'event')->name('event');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// Route::view('admin/dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
