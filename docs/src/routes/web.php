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
Route::get('/create', 'CreateController@index');
Route::post('/create', 'CreateController@entry');
Route::get('/create/list', 'CreateController@EntryList');
Route::get('/create/edit/{id}', 'CreateController@edit');
Route::post('/create/edit', 'CreateController@update');
Route::get('/create/delete/{id}', 'CreateController@show');
Route::post('/create/delete', 'CreateController@delete');
Route::get('/create/finish', 'CreateController@finish');

Route::get('/style', 'StyleController@index');
Route::get('/style/cute', 'StyleController@cute');
Route::get('/style/cool', 'StyleController@cool');
Route::get('/style/eccentric', 'StyleController@eccentric');
Route::get('/style/simple', 'StyleController@simple');
Route::get('/style/luxury', 'StyleController@luxury');
Route::get('/style/{id}', 'StyleController@detail');




