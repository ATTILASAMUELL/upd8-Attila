<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::prefix('client')->group(function(){
    // Route::middleware('auth:sanctum')->get('/', [ClientController::class, 'get']);
    // Route::middleware('auth:sanctum')->post('/', [ClientController::class, 'store']);
    // Route::middleware('auth:sanctum')->delete('/{id}', [ClientController::class, 'delete']);
    // Route::middleware('auth:sanctum')->put('/{id}', [ClientController::class, 'update']);
    Route::get('/', [ClientController::class, 'get']);
    Route::post('/', [ClientController::class, 'store']);
    Route::delete('/{id}', [ClientController::class, 'delete']);
    Route::put('/{id}', [ClientController::class, 'update']);
});