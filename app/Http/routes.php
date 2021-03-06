<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::post('/search/{data}', 'MainController@search');



Route::get('/pokedex', 'MainController@pokedex');
Route::get('/secret', 'MainController@getPokemon');


Route::post('/refresh_database/', 'MainController@refresh_database');

