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

    Route::delete('/delete/{id}'   , ['as' => 'activityController.destroy'     , 'uses' => 'activityController@destroy']);

     Route::post('/edit/{id}'   , ['as' => 'activityController.edit'     , 'uses' => 'activityController@edit']);

     Route::post('/updateedit/{id}'   , ['as' => 'activityController.edit'     , 'uses' => 'activityController@edit']);

	Route::get('/create'   , ['as' => 'activityController.create'     , 'uses' => 'activityController@create']);

     Route::post('/store'   , ['as' => 'activityController.store'     , 'uses' => 'activityController@store']);

  });
//Route::get('/acts/{id}'   , ['as' => 'activityController.show'     , 'uses' => 'activityController@show']);

