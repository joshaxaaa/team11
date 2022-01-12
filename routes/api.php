<?php

use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有廠商
    Route::get('vendors',[\App\Http\Controllers\VendorsController::class,'api_vendors']);
    // 修改指定廠商
    Route::patch('vendors',[\App\Http\Controllers\VendorsController::class,'api_update']);
    // 刪除指定廠商
    Route::delete('vendors',[\App\Http\Controllers\VendorsController::class,'api_delete']);
    // 查詢所有筆電
    Route::get('laptops',[\App\Http\Controllers\LaptopsController::class,'api_laptops']);
    // 修改指定筆電
    Route::patch('laptops',[\App\Http\Controllers\LaptopsController::class,'api_update']);
    // 刪除指定筆電
    Route::delete('laptops',[\App\Http\Controllers\LaptopsController::class,'api_delete']);

});

