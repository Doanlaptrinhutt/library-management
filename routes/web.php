<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookWebController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BookWebController::class, 'dashboard']);
Route::get('/books', [BookWebController::class, 'index']);
Route::get('/books/create', [BookWebController::class, 'create']);
Route::post('/books', [BookWebController::class, 'store']);
Route::get('/books/{id}/edit', [BookWebController::class, 'edit']);
Route::put('/books/{id}', [BookWebController::class, 'update']);
Route::delete('/books/{id}', [BookWebController::class, 'destroy']);


use App\Http\Controllers\BorrowWebController;

Route::get('/borrows', [BorrowWebController::class, 'index']);
Route::get('/borrows/create', [BorrowWebController::class, 'create']);
Route::post('/borrows', [BorrowWebController::class, 'store']);
Route::put('/borrows/{id}/return', [BorrowWebController::class, 'returnBook']);

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);