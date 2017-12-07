<?php
// Articles Route
// RESTful API
// REST API
// 	get /articles - index
// 	get /articles/1 - show
// 	get /articles/create - create
// 	post /articles - store
// 	get /articles/1/edit - edit
// 	put /articles/1 - update
// 	delete /articles/1 - destroy

Route::resource('products', "ProductsController");

Route::resource('categories', "CategoryController");

//Rouet::get('/', function(){
	// return redirect('articles');

	//});

// Route::get('articles/create', "ArticlesController@create");
// Route::post('articles', 'ArticlesController@store');

// Route::get('articles/{id}/edit', "ArticlesController@edit");
// Route::put('articles/{id}', "ArticlesController@update");

// Route::delete('articles/{id}', "ArticlesController@destroy");

// Route::get('articles', "ArticlesController@index");
// Route::get('articles/{id}', "ArticlesController@show");

// Categories Route
// Route::get('categories', "CategoryController@index");

// Route::get('categories/create', "CategoryController@create");
// Route::post('categories/store', "CategoryController@store");

// Route::get('categories/{id}/edit', "CategoryController@edit");
// Route::post('categories/{id}/update', "CategoryController@update");
// Route::get('categories/{id}/delete', "CategoryController@delete");

// Route::get('categories/{id}', "CategoryController@show");