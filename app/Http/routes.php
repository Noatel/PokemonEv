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

Route::get('/', 'Maincontroller@index');
Route::post('/search/{data}', 'Maincontroller@search');



Route::get('/pokedex', 'Maincontroller@pokedex');
Route::get('/secret', 'Maincontroller@getPokemon');


Route::post('/refresh_database/', 'Maincontroller@refresh_database');

