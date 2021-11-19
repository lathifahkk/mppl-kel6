<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('landing');
});

Route::get('/online-product', function () {
    return view('online-product');
});

Route::get('/offline-product', function () {
    return view('offline-product');
});

Route::get('/sign-up-success', function () {
    return view('sign-up-success');
});

Route::get('/transaction-success', function () {
    return view('transaction-success');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admindashboard');
});

Route::get('/product', function () {
    return view('adminproduct');
});

Route::get('/transaction', function () {
    return view('admintransaction');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/register', [RegisterController::class, 'store']);