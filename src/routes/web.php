<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);
Route::post('/confirm', [AuthorController::class, 'confirm']);
Route::get('/register', [AuthorController::class, 'register']);
Route::get('/login', 
[AuthorController::class,'login']);
Route::post('/thanks', [AuthorController::class, 'store']);