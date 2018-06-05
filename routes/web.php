<?php




Route::get('/', 'PagesController@index');

Auth::routes(); 

Route::get('/services', 'PagesController@services');

Route::get('/home', 'HomeController@index');

Route::get('/blogs', 'BlogsController@index');

Route::get('/pages/verify', 'PagesController@verify');

Route::get('/pages/confirm/{slug}', 'PagesController@confirm');

Route::get('/{slug}', 'BlogsController@cat');

Route::get('/home/request', 'HomeController@prelim');

Route::post('/home/confirm', 'HomeController@submit');

Route::get('/home/pay', 'HomeController@pay');

Route::post('/home/processpayment', 'HomeController@process');

Route::get('/home/questionnaire/{id}/{job}', 'HomeController@questionnaire');

Route::post('/home/questionnaire/{id}/{job}/submit', 'HomeController@save');

Route::get('/home/receipt', 'HomeController@receipt');

Route::get('/blogs/{url}', 'BlogsController@show');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


