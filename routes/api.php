<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPIController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\UserController;



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
Route::get('dummyAPI/{id?}', [dummyAPIController::class, 'index']);
Route::post('dummyAPIPost', [dummyAPIController::class, 'post']);
Route::put('update', [dummyAPIController::class, 'update']);
Route::delete('delete/{id}', [dummyAPIController::class, 'delete']);
Route::get('search/{s}', [dummyAPIController::class, 'search']);
Route::post('validate', [dummyAPIController::class, 'validatee']);
// to create this controller 
//php artisan make:controller  resourceController --resource
Route::apiResource('resource', resourceController::class);
Route::post('auth', [UserController::class, 'index']);
Route::post('upload', [dummyAPIController::class, 'uploadMe']);