<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontendcontroller;

Route::get('/', [Frontendcontroller::class, 'index'])->name('frontend.index');
