<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BannersControllers;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/banners', [BannersControllers::class, 'index']);


Route::get('/users', [UsersController::class, 'index']);

Route::post('/login', [UsersController::class, 'LOGIN']);

Route::get('/products/{slug}', [ProductsController::class, 'show']);
