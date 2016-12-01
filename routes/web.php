<?php




Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/services/', 'PagesController@services');

Route::get('/home/', 'HomeController@index');

Route::get('/blogs', 'BlogsController@index');

Route::get('/{slug}', 'BlogsController@cat');

// Route::get('/blogs/e-payment-eralding-a-new-age', 'BlogsController@show');

Route::get('/blogs/{url}', 'BlogsController@show');
