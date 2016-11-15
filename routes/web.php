<?php




Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home/', 'HomeController@index');

Route::get('/blogs/e-payment-eralding-a-new-age', 'BlogsController@show');
