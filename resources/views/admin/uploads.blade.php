@extends('layouts.master')
@section('pageTitle', 'Uploads')
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

          @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
          @endif

          <div class="card-body">
            <div class="p-3">
              <h4>All Forms Uploads

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New Form<i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add File</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('create.upload') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">Title</label>                     
                                <input class="form-control" type="text" name="name" required autofocus>
                            </div> 
                            
                             <div class="form-group">
                                <label for="file">Title</label>                     
                                <input class="form-control" type="file" name="file" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                              <label for="descp">Description</label>
                              <textarea class="form-control" name="description" id="" cols="15" rows="3"></textarea>
                            </div> 
                            
                            <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                         @forelse($uploads as $upload)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$upload->title}}</td>
                            <td>{{$upload->description}}</td>
                             <th><embed class="pdf" src="{{ asset('storage/'.$upload->file_path) }}" width="50%" height="50%"></th>
                           <td>
                            <form action="{{route('delete.file', ['id' => $upload->id])}}" method="post">
                                @csrf
                              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete!')"><i class="fa fa-trash"></i></button>
                            </form>
                           </td>
                        </tr>
                     @empty
                     @endforelse
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
