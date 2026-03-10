<?php

use Illuminate\Support\Facades\Route;

//client side
Route::view('/', 'client.home')->name('home');
Route::view('/contact', 'client.contact')->name('contact');
Route::view('/e-commerce', 'client.e-commerce')->name('e-commerce');


//admin side
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
