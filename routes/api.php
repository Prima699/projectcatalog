<?php

/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::post('login','api\LoginController@login');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group( function () {
    // Route::resource('categories', 'api\CategoriesController');
    Route::get('categories', 'api\CategoriesController@index');
	Route::get('categories/{id}', 'api\CategoriesController@show');
	Route::put('categories/{id}', 'api\CategoriesController@update');
	Route::delete('categories/{id}', 'api\CategoriesController@delete');

	//product
	Route::get('products', 'api\ProductController@index');
	Route::get('products/{id}', 'api\ProductController@show');
	Route::put('products/{id}', 'api\ProductController@update');
	Route::delete('products/{id}', 'api\ProductController@delete');
});
