<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/importCSV', 'importController@importCSV');
Route::get('/profileList','importController@profileList');
Route::get('/mail/{id}', 'HomeController@mail_admin');
Route::post('/mail', 'sendController@send_admin');
