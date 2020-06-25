<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUpdateUser;
use App\Http\Requests\RequestUser;
use App\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::orderBy('id','DESC')->paginate(5)->withPath("?keyword=$keyword");
        if($keyword) $users = User::where('name','like','%'.$keyword.'%')->orderBy('id','DESC')->paginate(5)->withPath("?keyword=$keyword");
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
            $data['avatar'] = 'users/user.png';
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
         if($request->old_password)
         {
             if (!\Hash::check($request->old_password, $user->password))
             {
                 return redirect()->back()->with('error-old_password', 'Mật khẩu cũ không chính xác');
             }
             if($request->password)
             {
                 $request->validate([
                    'password' => 'confirmed'
                 ],[
                     'password.confirmed' => 'Xác nhận mật khẩu không đúng !',
                 ]);
                 $user->password = bcrypt($request->password);
             }
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
