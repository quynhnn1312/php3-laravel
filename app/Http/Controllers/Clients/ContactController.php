<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends FrontendController
{
    public function index()
    {
        return view('client.contact');
    }
}
