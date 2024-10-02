<?php

Route::post('registrar', [\App\Http\Controllers\UserController::class, 'store']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'index']);

Route::get('list-corredores', [\App\Http\Controllers\CorredorController::class, 'index']);
Route::post('corredores', [\App\Http\Controllers\CorredorController::class, 'store']);
Route::put('edit-corredores/{id}', [\App\Http\Controllers\CorredorController::class, 'update']);
Route::get('corredores-count', [\App\Http\Controllers\CorredorController::class, 'show']);

Route::delete('corredores/{id}', [\App\Http\Controllers\CorredorController::class, 'destroy']);
