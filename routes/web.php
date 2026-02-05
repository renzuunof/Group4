<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/store', [HomeController::class, 'store'])->name('home.store');
