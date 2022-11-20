@extends('layouts.backend')

@section('title', 'Wallet')

@section('content')


    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse pay step crypto deposit-money">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="head-area d-flex align-items-center justify-content-between">
                        <h4>Fund E-Wallet</h4>
                        <div class="icon-area">
                            <img src="{{ URL::asset('public/backend/images/icon/support-icon.png')}}" alt="icon">
                        </div>
                    </div>
                    <div class="row justify-content-between pb-120">
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="left-area">
                                <ul>
                                    <!-- <li><a href="deposit-money.html" class="single-link active">Choose Payment Method</a></li> -->
                                    <li><a href="#" class="single-link active">Enter amount</a></li>
                                    <!-- <li><a href="deposit-money-3.html" class="single-link last">Confirm Order</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-7">
                        @if(session()->has('error')) {{session()->get('error')}} @endif

                            <div class="table-area">
                                                            
                                <form action="{{route('pay')}}" method="POST">
                                    @csrf 
                                    <div class="send-banance">
                                        <span class="mdr">How much do you want to add?</span>
                                        <div class="input-area">
                                            <input class="xxlr" name="ammount" placeholder="400.00" type="number" required>
                                            <select>
                                                <option value="1">NGN</option>
                                               
                                            </select>
                                        </div>
                                        <p>Available Balance<b>₦30,700.00</b></p>
                                    </div>  
                                </form>
                            </div>
                            <div class="footer-area mt-40">
                                <!-- <a href="deposit-money-1.html">Previous Step</a> -->
                                <a href="#" class="active">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->
@endsection