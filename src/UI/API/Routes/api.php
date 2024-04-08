<?php

use AdminKit\Brand\UI\API\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/{id}', [BrandController::class, 'show']);
