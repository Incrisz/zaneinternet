<?php

namespace App\Http\Controllers;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function wallet()
    {
        return view('backend.pages.wallet');
    }
    public function make_payment()
    {
        $formData = [
            'first_name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'amount' => request('amount') * 100,
            'callback_url' => route('pay.callback')
        ];
        $pay = json_decode($this->initiate_payment($formData));
        // dd($pay);
        if ($pay) {
            if ($pay->status) {
                return redirect($pay->data->authorization_url);  //This is what redirects us to paystack payment page
            } else {
                return back()->withError($pay->message);
            }
        } else {
            Toastr::error( "No Internet Connection", 'Message', ["positionClass" => "toast-top-right"]);

            return back();
        }
    }

    public function payment_callback()
    {
        $response = json_decode($this->verify_payment(request('reference'))); //gets all the info needed
        // dd($response);

        if ($response) {
            if ($response->status) {
                $data = $response->data;   // collects all user payment info
                $amount = $data->amount / 100;   //Divide the amount back to real fund
                $user = User::find(Auth::user()->id);  //Find the Auth user to fund wallet
                $user->deposit($amount);

                Toastr::success( "Wallet Funded Successfully", 'Message', ["positionClass" => "toast-top-right"]);

                return redirect()->route('home');
                // return view('backend.pages.wallet')->with(compact(['data']));
            } else {
                return back()->withError($response->message);
            }
        } else {
            Toastr::error( "Something went wrong", 'Message', ["positionClass" => "toast-top-right"]);

            return back();
        }
    }

    public function initiate_payment($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer sk_test_8acec9d0fa7eb2dd5ffb0ada81ed471ab38c761c",
            "Cache-Control: no-cache",
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
    }

    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_8acec9d0fa7eb2dd5ffb0ada81ed471ab38c761c",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return  $response;
    }
}
