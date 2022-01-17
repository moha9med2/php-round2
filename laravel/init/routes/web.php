<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\postsController;
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


Route::get('/', [pagesController::class, 'home']);
Route::get('/home', [pagesController::class, 'home']);
Route::get('/about', [pagesController::class, 'about'])->name('about');
Route::get('/contact', [pagesController::class, 'contact']);

Route::get('/single/{id}', [postsController::class, 'show'])->name('single');

