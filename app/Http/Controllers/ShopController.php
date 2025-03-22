<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function cart()
    {
        return view('shop/cart');
    }
    
    public function checkout()
    {
        return view('shop/checkout');
    }
    
    public function productDetails()
    {
        return view('shop/productDetails');
    }
    
    public function products()
    {
        return view('shop/products');
    }
    public function contact()
    {
        return view('shop/contact');
    }
}
