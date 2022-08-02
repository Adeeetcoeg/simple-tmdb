<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie.show');
