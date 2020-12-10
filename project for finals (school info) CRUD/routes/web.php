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

Auth::routes(['verify'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'LandingController@contact')->name('contact');

Route::group(['prefix'=>'student'], function(){
    Route::get('', 'StudentController@index')->name('student.index');
    Route::post('/store', 'StudentController@store')->name('student.store');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::get('/detail', 'StudentController@show')->name('student.show');
    Route::get('/edit', 'StudentController@edit')->name('student.edit');
    Route::delete('/delete', 'StudentController@destroy')->name('student.destroy');
    Route::patch('/update', 'StudentController@update')->name('student.update');
});
