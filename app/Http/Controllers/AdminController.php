<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Service;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.pages.dashboard');

    }

    public function product()
    {
        return view('admin.pages.products');

    }

    public function service()
    {        
        return view('admin.pages.services');

    }

    public function user() {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }
}
