<?php

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

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('dashboard');

// Auth::routes(['register' => false, 'logout' =>]); 


route::get('products/{id}/gallery', 'ProductController@gallery')
->name('products.gallery');
Route::resource('products', 'ProductController');

Route::resource('product-galleries', 'ProductGalleryController');

route::get('transactions/{id}/set-status', 'TransactionController@setStatus')
->name('transactions.status');
Route::resource('transactions', 'TransactionController');

// Route::get('/fa',[LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'login_process'])->name('login.process');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');