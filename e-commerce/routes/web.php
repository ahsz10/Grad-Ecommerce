<?php

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
    return view('welcome');
});


// Route::('/collections',[FrontendController::class,'index']);
// Route::('/collections',[FrontendController::class,'categories']);
// Route::('/collections/{category_slug}',[FrontendController::class,'prodcuts']);

// Route::('/home',[HomeController::class,'index'])->name('home');

