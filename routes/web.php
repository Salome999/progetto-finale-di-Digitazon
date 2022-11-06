<?php

use App\Http\Controllers\RicepeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::resource('/ricepes',App\Http\Controllers\RicepeController::class);
Route::get('/list', [App\Http\Controllers\MenuController::class, 'index'])->name('list');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('list');
Route::resource('admin', App\Http\Controllers\Admin\HomeController::class );
Route::resource('comments',App\Http\Controllers\CommentController::class);
Route::resource('search', App\Http\Controllers\RicepeUserController::class );
Route::resource('ricepeUser',App\Http\Controllers\RicepeUserController::class);
Route::resource('/likes', App\Http\Controllers\UserController::class);
Route::resource('/favorites', App\Http\Controllers\FavoriteController::class);
Route::resource('categories', App\Http\Controllers\Admin\AdminCategoryController::class );







