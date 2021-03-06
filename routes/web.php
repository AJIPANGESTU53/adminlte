<?php

use Illuminate\Support\Facades\Route;
// use App\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelolaBarang;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;

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

Route::get('/user/{name}', [UserController::class, 'show']);

Route::resource('kelola_barang', KelolaBarang::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/book/index', [BookController::class, 'create'])->name('create');
Route::get('admin/home', [App\Http\Controllers\AdminController::class,'index'])
          ->name('admin.home')
          ->middleware('is_admin');