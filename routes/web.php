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

Route::get('/', 'ProductController@index')->name('index');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

Route::get('/contactanos', function () {
    return view('contact');
});

/*Route::get('/', function () {
    return view('index');
});

Route::get('/contactanos', function () {
    return view('contact');
});*/