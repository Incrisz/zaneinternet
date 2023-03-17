@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')




  <div class="content-body rightside-event">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="welcome-card rounded ps-5 pt-5 pb-4 mt-3 position-relative mb-5">
							<h4 class="text-warning">Welcome to {{auth::user()->name}}!</h4>
							<p>Users({{ $users->count()}}) ----Services({{ $services->count()}})-------Products({{ $products->count()}})</p>
							<!-- <a class="btn btn-warning btn-rounded" href="javascript:void(0);">Learn More <i class="las la-long-arrow-alt-right ms-sm-4 ms-2"></i></a> -->
							<!-- <a class="btn-link text-dark ms-3" href="javascript:void(0);">Remind Me Later</a> -->
							<img src="{{ URL::asset('public/backend/asset/images/svg/welcom-card.svg')}}" alt="" class="position-absolute">
						</div>
					</div>
				
				</div>
            </div>
        </div>

  @endsection