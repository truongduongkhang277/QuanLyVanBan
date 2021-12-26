<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard');
        } else {
            echo "Đăng nhập lỗi";
            exit;
        }
    }

    public function dashboard(){
        if(Auth::guard('admin')->check()){
            $adminUser = Auth::guard('admin')->user();
            return view('admin.dashboard', ['user'=>$adminUser]);
        } else {
            return redirect('admin/login');
        }
    }

    public function logout(Request $request){
        // var_dump($request->email);exit;
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
