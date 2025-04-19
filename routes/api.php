<?php

use App\Http\Controllers\AutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autores', [AutorController::class, 'store']);
