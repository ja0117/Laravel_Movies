<?php

use App\movies;

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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/dev', function () {
    return view('dev');
});

Route::get('/home',function () {
    return view('home');
});

Route::resource('admin', 'AdminPanel');
Auth::routes();

Route::get('movies','MoviesController@index');
Route::get('movies/{id}','MoviesController@getID');
Route::get('movies/delete/{id}', 'MoviesController@destroy');
Route::get('movies/update/{id}', 'MoviesController@updateform');

