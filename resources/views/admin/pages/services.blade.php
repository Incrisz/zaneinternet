@extends('layouts.admin')

@section('title', 'Services')

@section('content')

  <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Transactions Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- <button type="submit" class="btn btn-primary"><a href="edit.html">Edit</a></button> -->
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                             
                                                <th>S/N</th>
                                                <th>Users Name</th>
                                                <th>Paid Service</th>
                                                <th>Status</th>
                                                <th>Date	</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                  @foreach($services as $key=>$service)
                    @foreach($users as $key=>$user)
                    @foreach($mixers as $key=>$mixer)

                    @if($user->id == $mixer->user_id && $service->id == $mixer->service_id)

                    <td>{{ $user->id}}</td>

                    <td>{{$user->name}}</td>
                    <td>{{$service->name}}</td>
                    <!-- <td> {{ $mixer->status}}</td> -->
                    <td>
                    <input class="switcher_input" type="checkbox"
                                                onclick="featured_status('{{$mixer['id']}}')" {{$mixer->status  == 1?'checked':''}}>
                        </td>
                    <td> {{ $mixer->created_at}}</td>


                  </tr>
                  @endif
               @endforeach
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
                url: "{{route('admin.servicestatus')}}",
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






