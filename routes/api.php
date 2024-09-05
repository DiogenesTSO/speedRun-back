<?php

use App\Http\Controllers\CorredorController;

Route::post('corredores', [CorredorController::class, 'store']);
