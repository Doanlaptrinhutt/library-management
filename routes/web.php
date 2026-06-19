<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookWebController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookWebController::class, 'index']);
Route::get('/books/create', [BookWebController::class, 'create']);
Route::post('/books', [BookWebController::class, 'store']);