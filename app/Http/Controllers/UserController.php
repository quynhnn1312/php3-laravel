<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUpdateUser;
use App\Http\Requests\RequestUser;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(RequestUser $request)
    {
        $data = $request->except('_token','password_confirmation');
        $data['password'] = bcrypt($data['password']);
        if($request->hasFile('avatar'))
        {
            $extension = $request->avatar->extension();
            $filename = 'user-' . uniqid() . '.' . $extension;
            $data['avatar'] = $request->avatar->storeAs('users', $filename, 'public');
        }else
        {
            $data['avatar'] = 'storage/users/user.png';
        }
        User::insert($data);
        return redirect()->route('get.list.user')->with('message', 'Thêm mới thành công !');
     }

     public function edit($id)
     {
         $user = User::find($id);
         if(empty($user))
         {
             return redirect()->back()->with('error', 'Tài khoản không tồn tại !');
         }
         return view('user.edit', compact('user'));
     }

     public function update(RequestUpdateUser $request, $id)
     {
         $user = User::find($id);
         if(empty($user))
         {
             return redirect()->back()->with('error', 'Tài khoản không tồn tại !');
         }
         $user->name = $request->name;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->address = $request->address;
         $user->role_id = $request->role_id;
         if($request->hasFile('avatar'))
         {
             $extension = $request->avatar->extension();
             $filename = 'user-' . uniqid() . '.' . $extension;
             $user->avatar = $request->avatar->storeAs('users', $filename, 'public');
         }
         $user->save();
         return redirect()->route('get.list.user')->with('message', 'Cập nhật thành công !');
     }

     public function action($action, $id)
     {
         if($action)
         {
             $user = User::find($id);
             switch ($action)
             {
                 case 'delete':
                     $user->delete();
                     return redirect()->back()->with('message', 'Xóa thành công !');
                     break;
                 case 'status':
                     $user->status = $user->status ? 0 : 1;
                     $user->save();
                     return redirect()->back()->with('message', 'Cập nhật thành công !');
                     break;
             }
         }
     }
}
