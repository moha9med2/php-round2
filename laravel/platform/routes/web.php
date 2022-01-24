<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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

// website pages routes
Route::get('home',[PagesController::class,'home'])->name('home');
Route::get('about',[PagesController::class,'about'])->name('about');
Route::get('contact',[PagesController::class,'contact'])->name('contact');
// form route
Route::post('form',FormController::class);


// posts 
Route::prefix('posts')->group(function () {
    Route::get('/index',[PostController::class,'index'])->name('posts.index');
    Route::get('/show/{id}',[PostController::class,'show'])->name('posts.show');
    Route::get('/create',[PostController::class,'create'])->name('posts.create');
    Route::post('/store',[PostController::class,'store'])->name('posts.store');
    Route::get('/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
    Route::post('/update/{id}',[PostController::class,'update'])->name('posts.update');
    Route::get('/delete/{id}',[PostController::class,'delete'])->name('posts.delete');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
