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

Route::pattern('id', '[0-9]+');
Route::pattern('name', '[A-Za-z]+');
Route::pattern('description', '[A-Za-z]+');
Route::pattern('price', '[0-9]+');

Route::group(['prefix'=>'admin'], function() {
    Route::get('categories/{id?}', ['as'=>'category', 'WelcomeController@exemplo']);
    Route::delete('categories/{id?}', ['as'=>'category', 'WelcomeController@exemplo']);
    Route::put('categories/{id?}/{name?}/{description?}', ['as'=>'category', 'WelcomeController@exemplo']);
    Route::post('categories/{name?}/{description?}', ['as'=>'category', 'WelcomeController@exemplo']);

    Route::get('products/{id?}', ['as'=>'product', 'WelcomeController@exemplo']);
    Route::delete('products/{id?}', ['as'=>'product', 'WelcomeController@exemplo']);
    Route::put('products/{id?}/{name?}/{description?}/{price?}', ['as'=>'product', 'WelcomeController@exemplo']);
    Route::post('products/{name?}/{description?}/{price?}', ['as'=>'product', 'WelcomeController@exemplo']);
});

Route::get('/', 'WelcomeController@index');

Route::get('exemplo', 'WelcomeController@exemplo');

Route::get('home', 'HomeController@index');

//Route::get('admin/categories', 'AdminCategoriesController@index');
//Route::get('admin/products', 'AdminProductsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
