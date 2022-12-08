@extends('layouts.admin')

@section('title', 'Services')

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
                <h3 class="card-title">Service DataTable </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>S/N</th> -->
                    <th>Users Name</th>
                    <th>Paid Service</th>
                    <th>Status</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach($services as $key=>$service)
                    @foreach($users as $key=>$user)
                    @foreach($mixers as $key=>$mixer)

                    @if($user->id == $mixer->user_id && $service->id == $mixer->service_id)

                    <!-- <td>Trident</td> -->
                    <td>{{$user->name}}</td>
                    <td>{{$service->name}}</td>
                    <!-- <td> {{ $mixer->status}}</td> -->
                    <td>
                          	<label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                            </label>
                        </td>
                    <td> {{ $mixer->created_at}}</td>


                  </tr>
                  @endif
               @endforeach
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