@extends('layouts.admin')

@section('title', 'Product')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>S/N</th> -->
                    <th>Users Name</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Status</th>
                    <th>Date</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $key=>$product)
                    @foreach($users as $key=>$user)
                    @if($user->id == $product->user_id)

                      <tr>
                        <!-- <td>{{ $key + 1}}</td> -->
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
                          
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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