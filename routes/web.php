<?php

use App\Http\Controllers\LaptopsController;
use App\Http\Controllers\VendorsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('laptops');
});
Route::get('laptops/highprice', [LaptopsController::class, 'highprice'])->name('laptops.highprice');
Route::resource("laptops", LaptopsController::class);
Route::resource("vendors", VendorsController::class);

