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
              <h4>All Slider

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add Slider <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Slider</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('add.slider') }}" >
                          {{ csrf_field() }}
                            
                            
                            <div class="form-group">
                                <label for="fname">Image</label>
                                <input class="form-control" type="file" name="image" required autofocus>  
                            </div> 
                            <div class="form-group mb-3">
                              <label for="descp">Description</label>
                              <textarea class="form-control" name="description" id="" cols="30" rows="3"></textarea>
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
                        <th>Featured Image</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($sliders as $slider)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <th><img class="img-thumbnail" src="{{ asset('storage/'.$slider->image) }}" width="70px"></th>
                            <td>{{$slider->description}}</td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editslider{{$slider->id}}"><i class="fa fa-edit"></i></button></td>                           
                <div class="modal fade mt-5" id="editslider{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Edit Slider</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{route('update.slider', ['id' =>$slider->id])}}" >
                          {{ csrf_field() }}
                            
                            <input type="hidden" name="old_image" value="{{$slider->image}}">
                            <div class="form-group">
                                <label for="fname">Image</label>
                                <input class="form-control" type="file"name="image">  
                            </div> 
                            <div class="mb-3">
                              <img src="{{asset('storage/'.$slider->image)}}" width="70" class="thumbnail">
                            </div> 
                            <div class="form-group mb-3">
                              <label for="descp">Description</label>
                              <textarea class="form-control" name="description" id="" cols="30" rows="3">{{$slider->description}}</textarea>
                            </div> 

                            <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                        </form>
                    </div>
                  </div>
                </div>
              </div>

                    <td>
                            <form action="{{route('del.slider', ['id' => $slider->id])}}" method="post">
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
