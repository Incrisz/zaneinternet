@extends('layouts.backend')

@section('title', 'account')

@section('content')
    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse account">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="owner-details">
                                <div class="profile-area">
                                    <div class="profile-img">
                                        <img src="{{ URL::asset('public/backend/images/user-profile.png') }}" alt="image">
                                    </div>
                                    <div class="name-area">
                                        <h6>{{Auth::user()->name}}</h6>
                                        <p class="active-status">Active</p>
                                    </div>
                                </div>
                                <div class="owner-info">
                                    <ul>
                                        <li>
                                            <p>Account ID:</p>
                                            <span class="mdr">Zanebiz{{Auth::user()->id}}</span>
                                        </li>
                                        <li>
                                            <p>Joined:</p>
                                            <span class="mdr">{{Auth::user()->created_at->toFormattedDateString()}}</span>
                                        </li>
                                        <li>
                                            <p>Confirm status:</p>
                                            <span class="mdr">80%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="owner-action">
                                    <a href="javascript:void(0)">
                                        <img src="{{ URL::asset('public/backend/images/icon/logout.png') }}" alt="image">
                                        Logout
                                    </a>
                                    <!-- <a href="javascript:void(0)" class="delete">
                                        <img src="{{ URL::asset('public/backend/images/icon/delete-2.png') }}" alt="image">
                                        Delete Account
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="tab-main">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="account-tab" data-bs-toggle="tab"
                                            data-bs-target="#account" type="button" role="tab" aria-controls="account"
                                            aria-selected="true">Account</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="security-tab" data-bs-toggle="tab"
                                            data-bs-target="#security" type="button" role="tab" aria-controls="security"
                                            aria-selected="false">Security</button>
                                    </li>
                               
                                </ul>
                                <div class="tab-content mt-40">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">
                                        <!-- <div class="upload-avatar">
                                            <div class="avatar-left d-flex align-items-center">
                                                <div class="profile-img">
                                                    <img src="{{ URL::asset('public/backend/images/user-profile-2.png') }}" alt="image">
                                                </div>
                                                <div class="instraction">
                                                    <h6>Your Avatar</h6>
                                                    <p>Profile picture size: 400px x 400px</p>
                                                </div>
                                            </div>
                                            <div class="avatar-right">
                                                <div class="file-upload">
                                                    <div class="right-area">
                                                        <label class="file">
                                                            <input type="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                        <p>{{$message}}</p>
                                            </div>
                                        @endif
                                        <form action="{{route('updateaccount')}}" method="POST">
                                              @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="fName">Full Name</label>
                                                        <input type="text" id="fName" name="name" placeholder="{{Auth::user()->name}}">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="email">Email</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-12">
                                                                <input type="text" id="email" name="email" placeholder="{{Auth::user()->email}}">
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="phone">Phone</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-12">
                                                                <input type="text" id="phone" name="phone" placeholder="{{Auth::user()->phone}}">
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="single-input file">
                                                        <label>Jamb documents</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-6">
                                                                <div class="file-upload">
                                                                    <div class="right-area">
                                                                        <label class="file">
                                                                            <input type="file">
                                                                            <span class="file-custom"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                   
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address" name="address" placeholder="{{Auth::user()->address}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="btn-border">
                                                        <button class="cmn-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="security" role="tabpanel"
                                        aria-labelledby="security-tab">
                                   
                                        <div class="change-pass mb-40">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5>Change Password</h5>
                                                    <p>You can always change your password for security reasons or reset your password in case you forgot it.</p>
                                                    <a href="javascript:void(0)">Forgot password?</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form action="#">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <label for="current-password">Current password</label>
                                                                    <input type="text" id="current-password" placeholder="Current password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <label for="new-password">New password</label>
                                                                    <input type="text" id="new-password" placeholder="New password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <label for="confirm-password">Confirm New password</label>
                                                                    <input type="text" id="confirm-password" placeholder="Confirm New password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="btn-border w-100">
                                                                    <button class="cmn-btn w-100">Update password</button>
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
                                                <img src="{{ URL::asset('public/backend/images/popup-card.png') }}" alt="image" class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="right-area">
                                                <div class="top-area d-flex align-items-center justify-content-between">
                                                    <div class="card-details d-flex align-items-center">
                                                        <img src="{{ URL::asset('public/backend/images/icon/mastercard.png') }}" alt="image">
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