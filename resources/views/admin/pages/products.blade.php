@extends('layouts.admin')

@section('title', 'Product')

@section('content')




  <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product's Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- <button type="submit" class="btn btn-primary"><a href="edit.html">Edit</a></button> -->
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                             
                                                <th>S/N</th>
                                                <th>Users Name</th>
                                                <th>Product Image</th>
                                                <th>Product Name</th>

                                                <th>Status</th>
                                                <th>Date	</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $key=>$product)
                    @foreach($users as $key=>$user)
                    @if($user->id == $product->user_id)

                      <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{$user->name}}</td>
                        <td><img src="{{ URL::asset('public/storage/product/'.$product->img) }}" width="90px" height="50px" alt="image"></td>
                        <td> {{ $product->name}}</td>
                        <!-- <td>{{$product->status}}</td> -->
                        <td>
                
                        <input class="switcher_input" type="checkbox"
                                                onclick="featured_status('{{$product['id']}}')" {{$product->status  == 1?'checked':''}}>

                        </td>
                        <td>{{$product->created_at->toFormattedDateString()}}</td>

                      </tr>
                      @endif
                  @endforeach
                  @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>

























@endsection



<script>
        function featured_status(id) {
     
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.productstatus')}}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function () {
                  //  alert("successful")
                }
            });
       
        }
</script>