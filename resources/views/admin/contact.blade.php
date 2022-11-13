@extends('layouts.master')
@section('pageTitle', 'Gallery')
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
              <h4>All Contact Entries

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
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Phone</th>                       
                        <th>Message</th>                       
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($contacts as $contact)
                       <tr>
                         <td>{{$loop->index +1}}</td>
                          <td>{{strip_tags($contact->name)}}</td>
                          <td>{{strip_tags($contact->subject)}}</td>
                          <td>{{strip_tags($contact->email)}}</td>
                          <td>{{strip_tags($contact->phone)}}</td>
                          <td>{{substr(strip_tags($contact->message), 0, 200)}}</td>
                          
                          <td>
                            <form action="{{route('delete.contact', ['id' => $contact->id])}}" method="post">
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
