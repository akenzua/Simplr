<?php




Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/services/', 'PagesController@services');

Route::get('/home/', 'HomeController@index');

Route::get('/blogs', 'BlogsController@index');

Route::get('/{slug}', 'BlogsController@cat');

Route::get('/home/request', 'HomeController@prelim');

Route::post('/home/pay', 'HomeController@pay');



Route::get('/blogs/{url}', 'BlogsController@show');


