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

Route::pattern('category', '[0-9]+');
Route::pattern('product', '[0-9]+');

Route::group(['prefix'=>'admin'], function() {
    Route::group(['prefix'=>'categories', 'as'=>'categories'], function() {
        Route::get('/{category}', function(\CodeCommerce\Category $category) {
            return 'Read category <strong>'.$category->name.'</strong>';
        });
        Route::get('create', function() {
            return 'Create new category';
        });
        Route::get('update/{category}', function(\CodeCommerce\Category $category) {
            return 'Update category <strong>'.$category->name.'</strong>';
        });
        Route::post('delete/{category}', function(\CodeCommerce\Category $category) {
            return 'Delete category <strong>'.$category->name.'</strong>';
        });
    });
    Route::group(['prefix'=>'products', 'as'=>'products'], function() {
        Route::get('/{product}', function(\CodeCommerce\Product $product) {
            return 'Read product <strong>'.$product->name.'</strong>';
        });
        Route::get('create', function() {
            return 'Create new product';
        });
        Route::get('update/{product}', function(\CodeCommerce\Product $product) {
            return 'Update product <strong>'.$product->name.'</strong>';
        });
        Route::post('delete/{product}', function(\CodeCommerce\Product $product) {
            return 'Delete product <strong>'.$product->name.'</strong>';
        });
    });
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
