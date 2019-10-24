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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/create', 'CreateController@show');
Route::post('/create', 'CreateController@entry');
Route::get('/create/list', 'CreateController@EntryList');
Route::get('/create/edit/{id}', 'CreateController@edit');
Route::post('/create/update', 'CreateController@update');
Route::get('/create/finish', 'CreateController@finish');


