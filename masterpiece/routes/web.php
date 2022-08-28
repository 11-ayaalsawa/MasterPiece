<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'About']);

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);

// Route::get('/bride', [App\Http\Controllers\HomeController::class, 'bride']);

Route::get('/groom', [App\Http\Controllers\HomeController::class, 'groom']);

Route::get('/venue', [App\Http\Controllers\HomeController::class, 'venue']);

Route::get('/package', [App\Http\Controllers\HomeController::class, 'package']);

// Route::get('/shops', [App\Http\Controllers\HomeController::class, 'shops']);

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product']);

// Route::get('/single', [App\Http\Controllers\HomeController::class, 'single']);


Route::get('/bride', [App\Http\Controllers\HomeController::class, 'fetch']);

Route::get('/groom', [App\Http\Controllers\HomeController::class, 'fetch2']);

Route::get('/venue', [App\Http\Controllers\HomeController::class, 'fetch3']);

// Route::get('/shops', [App\Http\Controllers\HomeController::class, 'fetch4']);


Route::get('/shops/id/{sub_id}', [App\Http\Controllers\HomeController::class, 'fetch4']);

Route::get('/product/id/{shop_id}', [App\Http\Controllers\HomeController::class, 'fetch5']);



Route::get('/single/id/{product_id}', [App\Http\Controllers\HomeController::class, 'fetch6']);



