<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'/products'],function(){
    Route::get('/list', 'ProductController@show')->name('product.show');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::get('/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/store', 'ProductController@store')->name('product.store');
    Route::post('/update', 'ProductController@update')->name('product.update');
    Route::post('/delete', 'ProductController@destroy')->name('product.destroy');

});