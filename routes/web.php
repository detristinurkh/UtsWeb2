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
    return view('Home', [
        "title" => "Home"
        ]);
});

Route::get('/login', function () {
    return view('Login', [
        "title" => "Login"
        ]);
});

Route::get('/hubungi', function () {
    return view('Contact', [
        "title" => "Contact"
        ]);
});

Route::get('barang', function () {
    return view('Product', [
        "title" => "Product"
        ]);
});

Route::get('/article', function () {
    return view('Article', [
        "title" => "Article"
        ]);
});
