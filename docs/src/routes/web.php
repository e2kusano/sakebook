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
Route::get('/create/{id}', 'CreateController@detail');

Route::get('/style', 'StyleController@index');
Route::get('/style/{directory}', 'StyleController@showList');

Route::get('/color', 'ColorController@index');
Route::get('/color/{directory}', 'ColorController@showList');

Route::get('/split', 'SplitController@index');
Route::get('/split/{directory}', 'SplitController@showList');

Route::get('/abv', 'AbvController@index');
Route::get('/abv/{directory}', 'AbvController@showList');

Route::get('/base', 'BaseController@index');
Route::get('/base/{directory}', 'BaseController@showList');

Route::get('/search', 'SearchController@index');
Route::post('/search/result', 'SearchController@result');

//ログインしている場合のみルーティング
Route::group(['middleware'=>'auth'],function(){
    //URLの最初の文字列をcreates->$idに指定する
    Route::group(['prefix'=>'create/{id}'],function(){
        //name()でURLを取得。creates->$id/like
        Route::post('like','LikeController@store')->name('likes.like');
        //name()でURLを取得。creates->$id/unlike
        Route::delete('unlike','LikeController@destroy')->name('likes.unlike');
    });
});





