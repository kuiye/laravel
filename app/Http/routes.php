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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('testcontract', 'TouristsController@index');
//Route::get('center', 'HomeController@index');
//Route::get('center', 'DetailController@detail');
Route::post('detail/{id}', 'DetailController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'center', 'namespace' => 'Center'], function()
{
    Route::get('/', 'HomeController@index');
    Route::resource('detail', 'DetailController');
    Route::get('/detailcreat', 'DetailController@create');
    Route::get('/detailedit', 'DetailController@edit');
    Route::get('/addcontract', 'ContractController@index');
    Route::post('/detailupdate', 'DetailController@update');
    Route::post('/detailnew', 'DetailController@newshop');
    Route::post('/addcontract', 'ContractController@create');
});