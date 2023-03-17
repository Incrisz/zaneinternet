<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Service;
use App\Models\ServiceUser;


use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


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
        $product = Product::find($request->id);
        // $product->status = $request->status;
        $product->status = ($product['status'] == 0 || $product['status'] == null) ? 1 : 0;
        $product->save();
  
        Toastr::success( "updated Successfully", 'Message', ["positionClass" => "toast-top-right"]);
    }
    public function servicestatus(Request $request)
    {
        $service = ServiceUser::find($request->id);
        $service->status = ($service['status'] == 0 || $service['status'] == null) ? 1 : 0;
        $service->save();
  
        Toastr::success( "updated Successfully", 'Message', ["positionClass" => "toast-top-right"]);

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
