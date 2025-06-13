<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'dashboard')->name('dashboard');


// Route::view('admin/dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

require __DIR__ . '/auth.php';
