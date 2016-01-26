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

Route::get('/', 'WelcomeController@index');
Route::get('demo', 'DemoController@index');

Route::get('home', 'HomeController@index');

Route::get('patients/add', 'DemoController@add');
Route::get('patients/search', 'DemoController@all');
Route::get('search', 'DemoController@allnow');
Route::get('view', 'DemoController@view');
Route::post('add', 'DemoController@save');
Route::post('profiles', 'DemoController@searchById');
Route::get('nervous/view', 'NervousController@view');
Route::get('symptoms/view', 'SymptomsController@view');
Route::get('nervous/motor', 'NervousController@motorTable');
Route::post('motor', 'NervousController@edit');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
