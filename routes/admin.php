<?php

use Illuminate\Support\Facades\Route;

//agregamos el controlador 
use App\Http\Controllers\Admin\HomeController;

//Asignamos el control de la ruta a ese controlador 
Route::get('',[HomeController::class,'index']);