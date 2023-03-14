<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\CarsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post("/owner/search", [OwnersController::class,'search'])->name('owner.search');
Route::resource("/owner", OwnersController::class);
Route::resource("/car", CarsController::class);
