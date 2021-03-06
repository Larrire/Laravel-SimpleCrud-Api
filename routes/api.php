<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;
use App\Http\Controllers\ItemsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/items')->group(function (){
  Route::get('/', [ItemsController::class, 'all']);
  Route::get('/find/{id}', [ItemsController::class, 'find']);
  Route::post('/new', [ItemsController::class, 'new']);
  Route::post('/update', [ItemsController::class, 'update']);
  Route::post('/delete/{id}', [ItemsController::class, 'delete']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
