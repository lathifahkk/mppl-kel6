<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
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
    return view('login');
});

Route::get('/offline-product', function () {
    return view('offline-product');
});

Route::get('/sign-up-success', function () {
    return view('sign-up-success');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('adminproduct/addproduct', function(){
    return view('addproduct');
});

Route::post('/addproduct', [ProductController::class, 'store']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//auth
Route::group(['middleware' => ['auth:user']], function(){
    Route::get('landing', 'App\Http\Controllers\ProductController@userlanding');
    Route::get('landing/{id}', 'App\Http\Controllers\AuthController@show');
    Route::get('landing/checkout/{id}', 'App\Http\Controllers\ProductController@checkout');
    Route::post('/transaction-success', 'App\Http\Controllers\TransactionsController@store');
    Route::get('transaction-success', 'App\Http\Controllers\TransactionsController@index');

    Route::get('offline-product', 'App\Http\Controllers\ProductController@offlineproduct');
    Route::get('online-product', 'App\Http\Controllers\ProductController@onlineproduct');
});

Route::group(['middleware' => ['auth:admin']], function(){
    Route::get('admin', 'App\Http\Controllers\AdminController@index');
    Route::get('adminproduct', 'App\Http\Controllers\AdminController@adminproduct');
    Route::get('adminproduct/addproduct', function(){
        return view('addproduct');
    });
    Route::get('admintransaction', 'App\Http\Controllers\AdminController@admintransaction');
});