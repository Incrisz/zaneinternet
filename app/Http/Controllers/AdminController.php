<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Service;
use App\Models\ServiceUser;


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

    public function productstatus(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->status = $request->status;
        $product->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function service()
    {        
        $users = User::all() ;
        $services = service::all();
        $mixers = ServiceUser::all();
        //   dd($mixers);

        return view('admin.pages.services',compact("users","services","mixers"));

    }

    public function user() {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }
}
