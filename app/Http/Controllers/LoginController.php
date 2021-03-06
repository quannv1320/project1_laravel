<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 


class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if($request->email == 'admin@gmail.com'){
               return redirect(route('admin.index'));
            }else{
                return redirect(route('login'));

            }
        }
        return view('auth.login', [
            'email' => $request->email,
            'msg' => "Tài khoản/mật khẩu không đúng!"
        ]);
    }
}
