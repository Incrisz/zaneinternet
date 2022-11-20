<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use Auth;
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
        if ($amount > Auth::User()->wallet_balance ) {
            return redirect()->route('wallet')->withError("Please fund your wallet");

        }else {

       $user =User::find(Auth::user()->id);
       $user->withdraw($amount);
       return redirect()->route('home')->withError($data["name"] . " paid for Successfully");
    }
    }
}
