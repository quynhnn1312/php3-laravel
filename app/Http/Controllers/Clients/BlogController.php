<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.blog.index');
    }

    public function blogDetail()
    {
        return view('client.blog.blog-detail');
    }
}
