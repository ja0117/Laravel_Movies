<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request)
{

    if(Auth::attempt(['email' => $request->input('email'), 'password'=> $request->input('password')]))
    {
        return response()->json(Auth::user()->createToken('Joshua')->accessToken);
    }
});

Route::get('movies','ApiController@index');
Route::get('movies/{movie}','ApiController@getID');
Route::delete('movies/delete/{movie}', 'ApiController@destroy');
Route::put('movies/update/{id}', 'ApiController@updateform');
Route::post('movies/create', 'ApiController@create');