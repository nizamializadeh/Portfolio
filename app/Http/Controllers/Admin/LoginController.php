<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            return redirect(route('adminHome'));
        }
        else {
            return back();
        }
    }
}
