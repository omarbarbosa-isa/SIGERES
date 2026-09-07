<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontendcontroller;

Route::get('/', [Frontendcontroller::class, 'index'])->name('frontend.index');
Route::get('/cozinha', [Frontendcontroller::class, 'cozinha'])->name('frontend.cozinha');
Route::get('/menu', [Frontendcontroller::class, 'menu'])->name('frontend.menu');
Route::get('/pos', [Frontendcontroller::class, 'pos'])->name('frontend.pos');
Route::get('/reservas', [Frontendcontroller::class, 'reservas'])->name('frontend.reservas');
Route::get('/users', [Frontendcontroller::class, 'users'])->name('frontend.users');