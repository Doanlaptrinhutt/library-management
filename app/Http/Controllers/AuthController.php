<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == 'admin' && $password == '123456') {
            Session::put('is_logged_in', true);
            Session::put('username', $username);

            return redirect('/');
        }

        return redirect('/login')->with('error', 'Sai tài khoản hoặc mật khẩu');
    }

    public function logout()
    {
        Session::forget('is_logged_in');
        Session::forget('username');

        return redirect('/login');
    }
}
