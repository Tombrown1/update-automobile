@extends('layouts.master')
@section('pageTitle', 'Booking')
@section('content')

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-3">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Error!</strong>

              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="card-body">
            <div class="p-3">
              <h4>All Booking Entries

                <!-- <a class="btn btn-success btn-xs float-right" href="{{ route('add.about') }}" >Add About Us<i class="fa fa-plus fa-fw"></i></a> -->
              </h4>

             
            </div>

            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Message</th>                       
                        <th>Email</th>
                        <th>Phone</th>                       
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($bookings as $booking)
                       <tr>
                         <td>{{$loop->index +1}}</td>
                          <td>{{strip_tags($booking->name)}}</td>
                          <td>{{strip_tags($booking->service)}}</td>
                          <td>{{substr(strip_tags($booking->message), 0, 200)}}</td>
                          <td>{{strip_tags($booking->email)}}</td>
                          <td>{{strip_tags($booking->phone)}}</td>
                          
                          <td>
                            <form action="{{route('delete.booking', ['id' => $booking->id])}}" method="post">
                              @csrf
                              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>                              
                            </form>
                          </td>
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
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
