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
<p>3. Once your Service is processed, you will be sent a confirmation email and you will also be able to printout or see status of your entry
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
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/1.jpg')}}" alt="image" class="w-100">
                                                <p>pay ₦1800 now</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/2.jpg')}}" alt="image" class="w-100">
                                                <p>pay ₦2500 now</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/3.jpg')}}" alt="image" class="w-100">
                                                <p>pay ₦3000 now</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/4.jpg')}}" alt="image" class="w-100">
                                                <p>pay ₦800 now</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/5.jpg')}}" alt="image" class="w-100">
                                                <p>pay ₦850 now</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-card">
                                            <button type="button" class="reg w-100" data-bs-toggle="modal"
                                                data-bs-target="#cardMod">
                                                <img src="{{ URL::asset('public/backend/images/6.jpg')}}" alt="image" class="w-100">
                                                <p>coming soon </p>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                         
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

    <!-- Add Card Popup start -->
    <div class="add-card">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="addcardMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <h6>Add Card</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <form action="#">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label for="cardNumber">Card Number</label>
                                                <input type="text" id="cardNumber" placeholder="5890 - 6858 - 6332 - 9843">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label for="cardHolder">Card Holder</label>
                                                <input type="text" id="cardHolder" placeholder="Alfred Davis">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label for="month">Month</label>
                                                <input type="text" id="month" placeholder="12">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label for="year">Year</label>
                                                <input type="text" id="year" placeholder="2025">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-border w-100">
                                                <button class="cmn-btn w-100">Add Card</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Card Popup start -->

    <!-- My Card Popup start -->
    <div class="transactions-popup mycard">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="transactionsMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="main-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>My Cards</h5>
                                            <div class="icon-area">
                                                <img src="{{ URL::asset('public/backend/images/popup')}}-card.png" alt="image" class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="right-area">
                                                <div class="top-area d-flex align-items-center justify-content-between">
                                                    <div class="card-details d-flex align-items-center">
                                                        <img src="{{ URL::asset('public/backend/images/icon/')}}mastercard.png" alt="image">
                                                        <span>5880 **** **** 8854</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <i class="icon-h-edit"></i>
                                                        Edit
                                                    </a>
                                                </div>
                                                <ul class="payment-details">
                                                    <li>
                                                        <span>Card Type:</span>
                                                        <span>Visa</span>
                                                    </li>
                                                    <li>
                                                        <span>Card Holder:</span>
                                                        <span>Alfred Davis</span>
                                                    </li>
                                                    <li>
                                                        <span>Expires:</span>
                                                        <span>12/19</span>
                                                    </li>
                                                    <li>
                                                        <span>Card Number:</span>
                                                        <span>5880 5087 3288 8854</span>
                                                    </li>
                                                    <li>
                                                        <span>Total Balance:</span>
                                                        <span>80,700.00</span>
                                                    </li>
                                                    <li>
                                                        <span>Total Debt:</span>
                                                        <span>8,250.00</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Card Popup start -->


@endsection