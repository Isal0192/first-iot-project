<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
});
