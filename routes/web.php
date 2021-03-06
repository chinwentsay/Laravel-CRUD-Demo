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
Route::group(['middleware' =>'auth'],function(){

 Route::get('/news'   , ['as' => 'activityController.index'     , 'uses' => 'activityController@index']);

  Route::group(['prefix' => 'acts'] , function() {

  	  Route::get('/'   , ['as' => 'activityController.index'     , 'uses' => 'activityController@index']);

	     Route::get('/show/{id}'   , ['as' => 'activityController.show'     , 'uses' => 'activityController@show']);

      Route::get('/delete/{id}'   , ['as' => 'activityController.destroy'     , 'uses' => 'activityController@destroy']);

       Route::get('/edit/{id}'   , ['as' => 'activityController.edit'     , 'uses' => 'activityController@edit']);

       Route::post('/update/{id}'   , ['as' => 'activityController.update'     , 'uses' => 'activityController@update']);

	     Route::get('/create'   , ['as' => 'activityController.create'     , 'uses' => 'activityController@create']);

      Route::post('/store'   , ['as' => 'activityController.store'     , 'uses' => 'activityController@store']);

  });

});
//Route::get('/acts/{id}'   , ['as' => 'activityController.show'     , 'uses' => 'activityController@show']);




Route::get('/home', 'HomeController@index');
