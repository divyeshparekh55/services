<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\OurShopController;
use App\Http\Controllers\Frontend\ProductDetailsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactUsController::class, 'index']);
Route::get('/shop', [OurShopController::class, 'index']);
Route::get('/product-details', [ProductDetailsController::class, 'index']);