<?php

use App\Http\Controllers\MenusController;
use App\Http\Controllers\RolesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController as UserV1;

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

// Route::apiResource('v1/posts', UserV1::class)
//   ->only(['index', 'show'])
//   ->middleware('auth:sanctum');

Route::post('login', [
  App\Http\Controllers\Api\V1\LoginController::class,
  'login'
]);

Route::get('menus', [MenusController::class, "index"]);
Route::get('roles', [RolesController::class, "index"]);

