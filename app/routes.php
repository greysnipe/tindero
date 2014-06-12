<?php

/*Routing for Main Pages*/
Route::get('/', array(
	'as'    =>  'index',
	'uses'	=>	'HomeController@showHome'
	));

Route::get('/index', array(
	'as'    =>  'index',
	'uses'	=>	'HomeController@showHome'
	));

Route::get('/cart', array(
	'as'    =>  'cart',
	'uses'	=>	'HomeController@showCart'
	));

Route::get('/shop', array(
	'as'    =>  'shop',
	'uses'	=>	'HomeController@showShop'
	));

Route::get('/checkout', array(
	'as'    =>  'checkout',
	'uses'	=>	'HomeController@showCheckout'
	));

Route::get('/about', array(
	'as'    =>  'about',
	'uses'	=>	'HomeController@showAbout'
	));

Route::get('/contact', array(
	'as'    =>  'contact',
	'uses'	=>	'HomeController@showContact'
	));



/*
Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});
*/