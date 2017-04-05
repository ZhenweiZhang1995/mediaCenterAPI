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

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Movies collection routes
Route::get('/movies', 'MovieController@index');
Route::post('/movies', 'MovieController@create');

// Movies singular routes
Route::get('/movies/{id}', 'MovieController@show');
Route::put('/movies/{id}', 'MovieController@update');
Route::delete('/movies/{id}', 'MovieController@destroy');
