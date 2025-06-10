<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('api/contactos', ContactoController::class);