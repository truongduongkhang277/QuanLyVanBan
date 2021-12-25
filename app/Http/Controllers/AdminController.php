<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginPost(Request $request){
        var_dump($request->email);exit;
    }
}
