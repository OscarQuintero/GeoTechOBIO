<?php

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
    return view('home');
});

Route::get('/catalogo/{estado?}', function ($estado = null) {
    return view('home', compact('estado'));
});

Route::get('/product-detail/{producto}', function ($producto = null) {
    return view('product-detail', compact('producto'));
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/categoriesfull', function () {
    return view('categoriesfull');
});

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/shipping', function () {
    return view('shipping');
});
Route::get('/ofertas', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
});
