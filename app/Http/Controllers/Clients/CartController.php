<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends FrontendController
{
    public function listCart()
    {
        $products = \Cart::content();
        return view('client.cart.listCart',compact('products'));
    }

    public function checkout()
    {
        return view('client.cart.checkout');
    }
}
