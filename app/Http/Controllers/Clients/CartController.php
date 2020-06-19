<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends FrontendController
{
    public function listCart()
    {
        return view('client.cart.listCart');
    }

    public function checkout()
    {
        return view('client.cart.checkout');
    }
}
