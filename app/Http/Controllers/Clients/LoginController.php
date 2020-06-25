<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegister;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends FrontendController
{
    public function getLogin()
    {
        return view('client.auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email không được để trống !',
            'password.required' => 'Vui lòng nhập password !'
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1,
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('get.home')->with('message', 'Đăng nhập thành công !');
        } else {
            return redirect()->back()->with('error', 'Email hoặc Password không chính xác !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.home');
    }

    public function getRegister()
    {
        return view('client.auth.register');
    }

    public function postRegister(RequestRegister $request)
    {
        $data = $request->except('_token','password_confirmation');
        $data['password']  = bcrypt($data['password']);
        User::insert($data);
        return redirect()->back()->with('message','Đăng ký tài khoản thành công !');
    }


    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with(['error' => 'Email hoặc mật khẩu không chính xác !']);
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'gmail.com' && explode("@", $user->email)[1] !== 'fpt.edu.vn'){
            return redirect()->to('/login')->with(['error' => 'Email hoặc mật khẩu không chính xác !']);
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {

            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();

            auth()->login($newUser, true);
        }
        return redirect()->to('/')->with(['message' => 'Đăng nhập thành công !']);
    }
}
