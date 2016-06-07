<?php

Route::group(['prefix' => 'admin', 'where' => ['id' => '[0-9]+']], function(){
    
Route::group(['prefix' => 'categories'], function(){
    
    Route::get('', ['as'=>'categories', 'uses'=>'CategoriesController@index']);
    Route::post('', ['as'=>'categories.store', 'uses'=>'CategoriesController@store']);
    Route::get('create', ['as'=>'categories.create', 'uses'=>'CategoriesController@create']);
    Route::get('{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'CategoriesController@destroy']);
    Route::get('{id}/edit', ['as'=>'categories.edit', 'uses'=>'CategoriesController@edit']);
    Route::put('{id}/update', ['as'=>'categories.update', 'uses'=>'CategoriesController@update']);
});

Route::group(['prefix' => 'products'], function(){
    
    Route::get('', ['as'=>'products', 'uses'=>'ProductsController@index']);
    Route::post('', ['as'=>'products.store', 'uses'=>'ProductsController@store']);
    Route::get('create', ['as'=>'products.create', 'uses'=>'ProductsController@create']);
    Route::get('{id}/destroy', ['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);
    Route::get('{id}/edit', ['as'=>'products.edit', 'uses'=>'ProductsController@edit']);
    Route::put('{id}/update', ['as'=>'products.update', 'uses'=>'ProductsController@update']);
    });
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[
    'as'=> 'home',
    'uses'=> 'HomeController@index'
]);

Route::get('exemplo', 'HomeController@exemplo');


//Route::get('category/{id}', function($id)
//{
//    $ca = new \CodeCommerce\Category();
//    $c = $ca->find($id);
//
//    return $c->name;
//
//});