@extends('layouts.backend')

@section('title', 'Transaction')

@section('content')
   <!-- Dashboard Section start -->
   <section class="dashboard-section body-collapse transactions">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="head-area">
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
                            <h4>Transactions</h4>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="transactions-right d-flex align-items-center">
                                <form action="#" class="flex-fill">
                                    <!-- <div class="form-group d-flex align-items-center">
                                        <img src="{{ URL::asset('public/backend/images/icon/search.png')}}" alt="icon">
                                        <input type="text" placeholder="Type to search...">
                                    </div> -->
                                </form>
                                <a href="javascript:void(0)">Statement</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="transactions-main">
                            <div class="top-items">
                                <h6>All Transactions</h6>
                                <div class="export-area">
                                    <ul class="d-flex align-items-center">
                                        <li><a href="javascript:void(0)"><img src="{{ URL::asset('public/backend/images/icon/printer.png')}}" alt="icon">Print</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{ URL::asset('public/backend/images/icon/excel.png')}}" alt="icon">Excel</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{ URL::asset('public/backend/images/icon/pdf.png')}}" alt="icon">PDF</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{ URL::asset('public/backend/images/icon/csv.png')}}" alt="icon">CSV</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name/ Business</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                            <th scope="row">
                                                <p>Bangkok Bank</p>
                                                <p class="mdr">Withdraw to bank account</p>
                                            </th>
                                            <td>
                                                <p>03:00 PM</p>
                                                <p class="mdr">10 Mar 2022</p>
                                            </td>
                                            <td>
                                                <p class="inprogress">In Progress</p>
                                            </td>
                                            <td>
                                                <p>-$520</p>
                                                <p class="mdr">$3.0</p>
                                            </td>
                                        </tr>
                            
                                    </tbody>
                                </table>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection