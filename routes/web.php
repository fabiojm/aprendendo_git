<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::get('/livros', [LivroController::class, 'index']);

Route::get('/livros/{isbn}', [LivroController::class, 'show']);

