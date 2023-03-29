<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;


Route::get('/', [siteController::class, 'Home'])->name('/');

Route::get('/about', [siteController::class, 'About'])->name('/about');

Route::get('/contact', [siteController::class, 'Contact'])->name('/contact');

