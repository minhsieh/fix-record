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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'login'] , function(){
	Route::get('/', ['uses' => 'LoginController@index']);
	Route::post('/', ['uses' => 'LoginController@login']);
});
Route::get('/logout' , ['uses' => 'LoginController@logout']);

Route::group(['prefix' => 'manage' , 'middleware' => 'auth'] , function(){
	//Route::get('' , ['uses' => '']);
	Route::get('/' , function(){
		return view('manage.index');
	});
});
