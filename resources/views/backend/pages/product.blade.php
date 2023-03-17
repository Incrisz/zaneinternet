@extends('layouts.backend')

@section('title', 'Product')

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
                                    @foreach($products as $prod)
                                        <img src="{{ URL::asset('public/storage/product/'.$prod->img) }}" alt="image">
                                        @endforeach
                                    </div>
                                    <div class="name-area">
                                        <h6>Product</h6>
                                    @foreach($products as $prod)
                                        @if($prod->status == 0)
                                        <p class="activestatus" style="color:red;">Not Approved</p>
                                        @else
                                        <p class="active-status">Approved</p>
                                        @endif
                                        @endforeach

                                    </div>
                                
                                </div>
                                <div class="owner-info">
                                    <ul>
                                        @foreach($products as $prod)
                                        <li>
                                            <p>Product Name:</p>
                                            <span class="mdr">{{$prod->name}}</span>
                                        </li>
                                        <li>
                                            <p>Product Price:</p>
                                            <span class="mdr">₦{{$prod->price}}</span>
                                        </li>
                                      
                                        <li>
                                            <p>Date Uploaded:</p>
                                            <span class="mdr">{{$prod->created_at->toFormattedDateString()}}</span>
                                        </li>
                                     
                                        <!-- <li>
                                            <p>Confirm status:</p>
                                            <span class="mdr">80%</span>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="owner-action">
                                    
  <form id="delete-form-{{ $prod->id }}" action="{{ route('product.destroy',$prod->id) }}" method="POST"  >
 
												@csrf
												@method('DELETE')
                                    <a href="javascript:void(0)" onclick="deleteProduct({{ $prod->id }})">
                                        <img src="{{ URL::asset('public/backend/images/icon/logout.png') }}" alt="image">
                                       Delete
                                    </a>
                                    </form>
                                    @endforeach
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
                                            aria-selected="true">My Product</button>
                                    </li>
                                 
                                </ul>
                                <div class="tab-content mt-40">
                                                   
                             
                                    <div class="tab-pane fade show active" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">
                       
                       
                                        @if(!$products->count() == 0)
                                 <p>Delete the old product to upload a new one.. Thanks</p>
                                        @else
                                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                              @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="fName">Product Name</label>
                                                        <input type="text" id="fName" name="name" value="" placeholder="product name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="fName">Product Price</label>
                                                        <input type="text" id="fName" name="price" value="" placeholder="product price">
                                                    </div>
                                                </div>
                                               
                                     
                                                <div class="col-md-12">
                                                    <div class="single-input file">
                                                        <label>Product Image</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-6">
                                                                <div class="file-upload">
                                                                    <div class="right-area">
                                                                        <label class="file">
                                                                            <input type="file" name="img">
                                                                            <span class="file-custom"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address" name="address" placeholder="{{Auth::user()->address}}">
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="btn-border">
                                                        <button class="cmn-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endif
                                     
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


 
@endsection

<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteProduct(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>