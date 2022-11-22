@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')




    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="row">
                <p style="color:red;">@if(session()->has('error')) {{session()->get('error')}} @endif</p> 
                
        
                    <div class="col-xl-8 col-lg-7">
                        <div class="section-content">
                            <div class="acc-details">

       
                             <div class="top-area">
                                    <div class="left-side">
                                        <h5>Hi, {{Auth::user()->name}} !</h5>
                                        <h2>₦{{Auth::user()->wallet_balance}}</h2>
                                        <!-- <h5 class="receive">Last Received <span>$25,700.00</span></h5> -->
                                    </div>
                                   
                                </div>
                                <div class="bottom-area">
                                    <div class="left-side">
                                        <!-- <a href="pay.html" class="cmn-btn">Transfer Money</a> -->
                                        <a href="{{route('wallet')}}" class="cmn-btn">Add Money</a>
                                        <!-- <a href="withdraw-money-step-1.html" class="cmn-btn">Withdraw</a> -->
                                    </div>
                                  
                                </div>
                            </div>
                            <div>

<p>1. Click the "Pay Now" button to make payment for the service via e-Wallet or Debit Card</p>

<p>2. Your details will be sent to your email
</p>
<p>3. Once your Service is processed, you will be sent a confirmation email and you will also be able to see status of your transaction
</p>
<p>For any enquiry or complain please send a mail to zaneinternetresource@gmail.com


</p>                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="side-items">
                            <div class="single-item">
                                <div class="section-text d-flex align-items-center justify-content-between">
                                    <h6>Our Services</h6>
                                 
                                </div>

                                <div class="row">
                                    @foreach($services as $service)
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" id="{{ $service->id}}" data-bs-toggle="modal" onclick="myPay(this)"
                                                data-bs-target="#cardMod">
                                                <img src="{{$service->img}}" alt="image" class="w-100">
                                                <p>pay ₦{{$service->amount}}</p>
                                            </button>
                                        </div>
                                    </div>
                                   @endforeach
                                    
                                </div>
                            </div>
                         
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

 @include('backend.pages.dashboard_service')

@endsection