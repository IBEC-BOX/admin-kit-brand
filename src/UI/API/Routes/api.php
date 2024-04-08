<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Brand\UI\API\Controllers\BrandController;

Route::get('/brand', [BrandController::class, 'showFirst']);
