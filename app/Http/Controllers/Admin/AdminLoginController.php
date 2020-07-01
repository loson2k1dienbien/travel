<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\customer;
class AdminLoginController extends Controller
{
    public function getlogin(){
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admin');
        } else {
            return view('admin.page.login');
        }
    }
    public function postlogin(LoginRequest $request)
    {
        $remember = ($request->remember==1)?true:false;
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($login,$remember)) {
            return redirect('admin');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect()->route('getlogin');
    }
}
