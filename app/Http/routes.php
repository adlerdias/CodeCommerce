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

Route::Pattern('id', '[0-9]+');

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'categories'], function () {
        Route::get('', ['as' => 'admin.categories', 'uses' => 'AdminCategoriesController@index']);
        Route::get('create', ['as' => 'admin.categories.create', 'uses' => 'AdminCategoriesController@create']);
        Route::post('store', ['as' => 'admin.categories.store', 'uses' => 'AdminCategoriesController@store']);
        Route::get('delete/{id}', ['as' => 'admin.categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);
        Route::get('edit/{id}', ['as' => 'admin.categories.edit', 'uses' => 'AdminCategoriesController@edit']);
        Route::put('update/{id}', ['as' => 'admin.categories.update', 'uses' => 'AdminCategoriesController@update']);
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('', ['as' => 'admin.products', 'uses' => 'AdminProductsController@index']);
        Route::get('create', ['as' => 'admin.products.create', 'uses' => 'AdminProductsController@create']);
        Route::post('store', ['as' => 'admin.products.store', 'uses' => 'AdminProductsController@store']);
        Route::get('delete/{id}', ['as' => 'admin.products.destroy', 'uses' => 'AdminProductsController@destroy']);
        Route::get('edit/{id}', ['as' => 'admin.products.edit', 'uses' => 'AdminProductsController@edit']);
        Route::get('{id}/images', ['as' => 'admin.products.images', 'uses' => 'AdminProductsController@images']);
        Route::get('{id}/createImage', ['as' => 'admin.products.images.create', 'uses' => 'AdminProductsController@createImage']);
        Route::post('{id}/storeImage', ['as' => 'admin.products.images.store', 'uses' => 'AdminProductsController@storeImage']);
        Route::get('{id}/destroyImage', ['as' => 'admin.products.images.destroy', 'uses' => 'AdminProductsController@destroyImage']);
        Route::put('update/{id}', ['as' => 'admin.products.update', 'uses' => 'AdminProductsController@update']);
    });
});

Route::get('/', function () {
    return view('welcome');
});
