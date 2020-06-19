<?php

namespace App\Http\Controllers\Clients;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index()
    {
        return view('client.home.index');
    }
}
