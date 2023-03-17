@extends('layouts.admin')

@section('title', 'Users')

@section('content')


  <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- <button type="submit" class="btn btn-primary"><a href="edit.html">Edit</a></button> -->
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                             
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Registered Date	</th>
                                                <th>Wallet</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{$user->name}} </td>
                            <td>{{$user->email}}</td>
                            <td> {{$user->created_at->toFormattedDateString()}}</td>
                            <td>₦{{$user->wallet_balance}}</td>
                        </tr>
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