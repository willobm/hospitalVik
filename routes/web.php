<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [PersonalController::class, 'index'])->name('personas.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
