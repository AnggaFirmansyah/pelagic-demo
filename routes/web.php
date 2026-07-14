<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('product', 'product')->name('product');
Route::view('pricing', 'pricing')->name('pricing');
Route::view('customers', 'customers')->name('customers');
Route::view('docs', 'docs')->name('docs');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
