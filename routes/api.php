<?php

use App\Http\Controllers\CorredorController;

Route::get('list-corredores', [CorredorController::class, 'index']);
Route::post('corredores', [CorredorController::class, 'store']);

Route::delete('corredores/{id}', [CorredorController::class, 'destroy']);
