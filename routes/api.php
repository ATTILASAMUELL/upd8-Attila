<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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


Route::prefix('client')->group(function(){
    Route::middleware('auth:sanctum')->get('/', [ClientController::class, 'get']);
    Route::middleware('auth:sanctum')->post('/', [ClientController::class, 'store']);
    Route::middleware('auth:sanctum')->delete('/{id}', [ClientController::class, 'delete']);
    Route::middleware('auth:sanctum')->put('/{id}', [ClientController::class, 'update']);
});