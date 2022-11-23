<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
  
        $services = Service::all();
        return view('backend.pages.dashboard', compact(['services']));
    }

    public function wallet()
    {
        return view('backend.pages.wallet');
    }

    public function withdraw()
    {


        $data = [
            "id" => request("id"),
            "name" => request("name"),
            "amount" => request("amount"),
        ];
        $amount = (int) $data['amount'];
        $id = (int) $data['id'];
        
        if ($amount == 0.00) {
            Toastr::error( " Card Amount not added yet", 'Message', ["positionClass" => "toast-top-right"]);

            return redirect()->route('home');

        }else {
        if ($amount > Auth::User()->wallet_balance ) {
            Toastr::warning( " Please fund your wallet", 'Message', ["positionClass" => "toast-top-right"]);

            return redirect()->route('wallet');

        }else {

       $user =User::find(Auth::user()->id);
       $user->withdraw($amount);
       $user->services()->attach($id);
    //    dd('passed');
    Toastr::success( " Payment made Successfully", 'Service', ["positionClass" => "toast-top-right"]);

       return redirect()->route('transaction');
            }
        }
    }

    public function transaction()
    {
        return view('backend.pages.transaction');
    }

    public function account()
    {
        return view('backend.pages.account');
    }



    public function updateaccount(Request $request)
    {
         //validation rules
        if ($request['name'] == null || $request['email'] == null) {
            return back()->withError('Name or Email can\'t be left empty');
        }else {
            $user =Auth::user();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->address = $request['address'];
            $user->save();
            Toastr::success('Profile Updated successfully', 'Account', ["positionClass" => "toast-top-right"]);
            return back();
        }
     
     
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        Toastr::success('Password Updated successfully', 'Account', ["positionClass" => "toast-top-right"]);

        return back();

    }
}
