<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Auth;




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

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/items', [TodolistController::class, 'index']);

    Route::prefix('/item')->group( function () {
        Route::post('/save', [TodolistController::class, 'Save']);
        Route::put('/{id}', [TodolistController::class, 'update']);
        Route::delete('/{id}', [TodolistController::class, 'destroy']);

});


});