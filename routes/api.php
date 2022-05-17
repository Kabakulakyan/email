<?php

use App\Http\Controllers\FollowerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user',[UserController::class,'index']);
Route::get('/our-project',[FollowerController::class,'followers']);
Route::post('/subscribe/{id}',[FollowerController::class,'subscribe']);
Route::get('/insert/{id}',[FollowerController::class,'insert']);
