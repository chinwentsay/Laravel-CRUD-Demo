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

 Route::get('/news'   , ['as' => 'activityController.index'     , 'uses' => 'activityController@index']);

  Route::group(['prefix' => 'acts'] , function() {

	Route::get('/{id}'   , ['as' => 'activityController.show'     , 'uses' => 'activityController@show']);

  });
//Route::get('/acts/{id}'   , ['as' => 'activityController.show'     , 'uses' => 'activityController@show']);

