<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/store', [HomeController::class, 'store'])->name('home.store');

<<<<<<< HEAD
Route::delete('/users/{id}', [HomeController::class,'destroy'])->name('home.destroy');
=======
Route::get('/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/{id}', [HomeController::class, 'update'])->name('home.update');
>>>>>>> 9e6cf7f4d097b622b73ade1cd9f32231789ad283
