<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/article/{slug}', [ArticleController::class, 'guestShow']);

Route::middleware('auth:sanctum')->group(function (): void {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard/statistics', [DashboardController::class, 'getstatistics']);

    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/article/{auhtor}', [ArticleController::class, 'show']);
    Route::post('/article', [ArticleController::class, 'store']);

});
