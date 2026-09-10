<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontendcontroller;

Route::get('/', [Frontendcontroller::class, 'index'])->name('frontend.index');
Route::get('/cozinha', [Frontendcontroller::class, 'cozinha'])->name('cozinha.index');
Route::get('/menu', [Frontendcontroller::class, 'menu'])->name('menu.index');
Route::get('/pos', [Frontendcontroller::class, 'pos'])->name('pos.index');
Route::get('/reservas', [Frontendcontroller::class, 'reservas'])->name('reservas.index');
Route::get('/users', [Frontendcontroller::class, 'users'])->name('users.index');