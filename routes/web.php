<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\DetailbookController;
use App\Http\Controllers\DetailmembershipController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('dashboard');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/event', [EventPageController::class, 'index'])->name('event');

Route::get('/book/class/{id}', [DetailmembershipController::class, 'index'])->name('detail_membership');
Route::get('/book/detail/{id}', [DetailbookController::class, 'index'])->name('detail_book');

Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');


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
