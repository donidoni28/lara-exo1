<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', [HomeController::class,'redir']);
Route::prefix('/home')->group(function(){
    Route::get('/welcome', [HomeController::class,'index'])->name('wel');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');
    Route::get('/services', [ServicesController::class,'index'])->name('services');
    Route::get('/about', [AboutController::class,'index'])->name('about');

});