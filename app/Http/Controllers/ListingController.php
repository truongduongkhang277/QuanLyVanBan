<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, $modelName) {
        $adminUser = Auth::guard('admin')->user();

        $model = '\App\Models\\'.ucfirst($modelName);

        // trỏ đến hàm scopeSearch trong model để rút gọn code
        $records = $model::paginate(15);

        return view('admin.listing', [
            'user' => $adminUser,
            'records' => $records,
        ]);
    }
}
