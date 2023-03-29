<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustAuthController;
use App\Http\Controllers\LanguageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[CustAuthController::class,'home']);
Route::get('login',[CustAuthController::class,'index'])->name('login');
Route::post('postlogin',[CustAuthController::class,'login'])->name('postlogin');
Route::get('register', [CustAuthController::class, 'reg'])->name('register');
Route::get('signout', [CustAuthController::class, 'signOut'])->name('signout');

Route::get('signout', [CustAuthController::class, 'signOut'])->name('signout');
Route::post('postsignup', [CustAuthController::class, 'regsave'])->name('postsignup');
Route::post("/owner/search", [OwnersController::class,'search'])->name('owner.search');
Route::resource("/owner", OwnersController::class)->middleware('LoggedIn');
Route::resource("/car", CarsController::class)->middleware('LoggedIn');
Route::get('/setLanguage/{language}', [LanguageController::class, 'setLanguage'])->name("setLanguage");