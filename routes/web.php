<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userProductController;

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


/* Welcome page route */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', function () {
    return view('welcome');
})->middleware('guest');


/* normal user route to user home */
/* Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home')->middleware('auth'); */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('home', userProductController::class);


/* admin route to admin home */
/* Route::resource('products', ProductController::class); */
Route::resource('products', ProductController::class)->middleware('is_admin');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


/* admin restriction to not access user home */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware(['auth', 'admin_restriction']);

