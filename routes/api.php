<?php

use App\Http\Controllers\Api\ProductoApiController;
use App\Http\Controllers\Api\TareaApiController;
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

Route::get('productos', [ProductoApiController::class,'index']);

Route::post('productos', [ProductoApiController::class,'store']);

Route::get('productos/{id}', [ProductoApiController::class,'show']);

Route::put('productos/{id}', [ProductoApiController::class,'update']);

Route::delete('productos/{id}', [ProductoApiController::class,'destroy']);

//rutas para las tareas

Route::get('tareas', [TareaApiController::class,'index']);

Route::post('tareas', [TareaApiController::class,'store']);

Route::get('tareas/{id}', [TareaApiController::class,'show']);

Route::put('tareas/{id}', [TareaApiController::class,'update']);

Route::delete('tareas/{id}', [TareaApiController::class,'destroy']);
