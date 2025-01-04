<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data\DataController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('data', [DataController::class, 'index']);
Route::get('all', [DataController::class, 'allData']);
Route::post('data/save', [DataController::class, 'storeData']);
Route::delete('data/delete/{id}', [DataController::class, 'destroy']);
Route::patch('data/update/{id}', [DataController::class, 'update']);