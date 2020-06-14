<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $products = Product::get();
        $viewData = [
            'categories' => $categories,
            'products' => $products,
        ];
        return view('homepage', $viewData);
    }
}
