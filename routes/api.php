<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('authors', AuthorController::class)->only([
    'index',
    'store'
]);


Route::apiResource('users', AuthController::class);
Route::apiResource('books', BookController::class);

Route::post('login', [AuthController::class, 'login']);
