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

// VideoGames collection routes
Route::get('/videogames', 'VideogameController@index');
Route::post('/videogames', 'VideogameController@create');

// VideoGame singular routes
Route::get('/videogames/{id}', 'VideogameController@show');
Route::put('/videogames/{id}', 'VideogameController@update');
Route::delete('/videogames/{id}', 'VideogameController@destroy');

// Albums collection routes
Route::get('/albums', 'AlbumController@index');
Route::post('/albums', 'AlbumController@create');

// Albums singular routes
Route::get('/albums/{id}', 'AlbumController@show');
Route::put('/albums/{id}', 'AlbumController@update');
Route::delete('/albums/{id}', 'AlbumController@destroy');

// HTML/view responses
Route::get('/', function () {
  return view('home');
});
