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
              <h4>All Gallery

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New Gallery<i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Gallery</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('add.gallery') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">Title</label>                     
                                <input class="form-control" type="text" name="name" required autofocus>
                            </div> 
                            
                            <div class="form-group mb-3">
                                <label for="fname">Gallery Category</label>
                              <select name="gallery_cat_id" id="" class="form-control">
                                @foreach($gallery_cats as $gallery_cat)
                                  <option value="{{$gallery_cat->id}}">{{$gallery_cat->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group mb-3">
                              <label for="descp">Description</label>
                              <textarea class="form-control" name="description" id="" cols="15" rows="3"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="fname">Image</label>
                                <input class="form-control" type="file" name="image" required autofocus>  
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
                        <th>Featured Image</th>
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @forelse($gallerys as $gallery)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$gallery->name}}</td>
                            <td>{{$gallery->description}}</td>
                             <th><img class="img-thumbnail" src="{{ asset('storage/'.$gallery->file_path) }}" width="70px"></th>
                             <td>
                               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editgallery{{$gallery->id}}"><span class="fa fa-edit"></span></button>
                             </td>
                            <div class="modal fade mt-5" id="editgallery{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="addCourseLabel">Edit Gallery {{$gallery->id}}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('update.gallery', ['id' => $gallery->id]) }}">
                                          {{ csrf_field() }}
                                      
                                      <div class="form-group">
                                          <label for="fname">Title</label>                     
                                          <input class="form-control" value="{{$gallery->name}}" type="text" name="name" required autofocus>
                                      </div> 
                                      
                                      <div class="form-group mb-3">
                                          <label for="fname">Gallery Category</label>
                                        <select name="gallery_cat_id" id="" class="form-control">
                                          @foreach($gallery_cats as $gallery_cat)
                                            <option value="{{$gallery_cat->id}}">{{$gallery_cat->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="descp">Description</label>
                                        <textarea class="form-control" name="description" id="" cols="15" rows="3">{{$gallery->description}}</textarea>
                                      </div> 
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input class="form-control" type="file" name="image" required autofocus>  
                                      </div> 
                                      <img src="{{asset('storage/'.$gallery->image)}}" width="70" class="img-thumbnail">
                                      
                                      <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                                  </form>
                              </div>
                            </div>
                          </div>
                        </div>

                           <td>
                            <form action="{{route('del.image', ['id' => $gallery->id])}}" method="post">
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
