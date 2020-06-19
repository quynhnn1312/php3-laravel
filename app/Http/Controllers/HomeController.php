<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $products = Product::get();
        $users = User::get();
        $viewData = [
            'categories' => $categories,
            'products' => $products,
            'users' => $users
        ];
        return view('homepage', $viewData);
    }
}
