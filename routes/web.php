<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/aboutUs', [PagesController::class, 'aboutUs']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/blog/search', [PostsController::class, 'index'])->name('posts.search');

Route::get('/blog', [PostsController::class, 'index'])->name('posts.index');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/map', [\App\Http\Controllers\MapController::class, 'index']);

Route::get('sliders', [SliderController::class, 'index']);