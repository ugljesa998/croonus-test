<?php

use Illuminate\Support\Facades\Route;
use Croonus\Ecommerce\Http\Controllers\EcommerceController;


Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce');
