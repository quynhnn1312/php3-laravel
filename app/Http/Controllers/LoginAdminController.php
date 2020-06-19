<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2,
            'status' => 1,
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('get.list.home');
        } else {
            return redirect()->back()->with('message', 'Email hoặc Password không chính xác !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.admin');
    }
}
