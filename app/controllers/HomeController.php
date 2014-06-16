<?php

class HomeController extends BaseController {

	public function showHome()
	{
		return View::make('pages/index')
			   ->with('title', 'Tindero');
	}

	public function showCart()
	{
		return View::make('pages/cart')
			   ->with('title', 'Cart');
	}

	public function showShop()
	{
		return View::make('pages/shop')
			   ->with('title', 'Shop');
	}

	public function showCheckout()
	{
		return View::make('pages/checkout')
			   ->with('title', 'Checkout');
	}

	public function showAbout()
	{
		return View::make('pages/about')
			   ->with('title', 'About');
	}

	public function showContact()
	{
		return View::make('pages/contact')
			   ->with('title', 'Contact');
	}
}
