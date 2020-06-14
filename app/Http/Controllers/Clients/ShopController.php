<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('client.shop.index');
    }

    public function singleProduct()
    {
        return view('client.shop.single-product');
    }
}
