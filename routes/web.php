<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/product', 'product')->name('product');
Route::view('/event', 'event')->name('event');
Route::view('/class/detail', 'detail_class')->name('detail_class');
Route::view('/book/detail', 'detail_book')->name('detail_book');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // atau route lain setelah logout
})->name('logout');

// Route::view('admin/dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
