<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Service;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
       $users = db::table('users')->select('*')->get();
   
       $products = product::all();
       $services = User::with('services')->get() ;

        return view('admin.pages.dashboard', compact("users","products","services"));

    }

    public function product()
    {
        $users = User::all();
        $products = Product::all();
        return view('admin.pages.products',compact("users","products"));

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
