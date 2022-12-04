@extends('layouts.master')
@section('pageTitle', 'Club Section')
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
              <h4>All Section

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add Club Section<i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Club Section</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('add.club.section') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">Title</label>                     
                                <input class="form-control" type="text" name="name" required autofocus>
                            </div> 
                            
                            <div class="form-group mb-3">
                                <label for="fname">Section Category</label>
                              <select name="club_category_id" id="" class="form-control">
                                @foreach($clubcategorys as $clubcategory)
                                    <option value="{{$clubcategory->id}}">{{$clubcategory->name}}</option>
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
                        @foreach($clubsections as $clubsection)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$clubsection->name}}</td>
                                <td>{{$clubsection->description}}</td>
                                <td>
                                    <img class="img-thumbnail" src="{{asset('storage/'.$clubsection->file_path)}}" width="70">
                                </td>
                                <td>
                                    <form action="#" method="get">
                                        @csrf
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editclub{{$clubsection->id}}"><i class="fa fa-edit"></i></button>
                                    </form>

                        <div class="modal fade mt-5" id="editclub{{$clubsection->id}}" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="addCourseLabel">Edit Club Section</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('edit.club.section', ['id' => $clubsection->id]) }}" >
                                    {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label for="fname">Title</label>                     
                                            <input class="form-control" type="text" name="name" value="{{$clubsection->name}}" required autofocus>
                                        </div> 
                                        
                                        <div class="form-group mb-3">
                                            <label for="fname">Section Category</label>
                                        <select name="club_category_id" id="" class="form-control">
                                            @foreach($clubcategorys as $clubcategory)
                                                <option value="{{$clubcategory->id}}">{{$clubcategory->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group mb-3">
                                        <label for="descp">Description</label>
                                        <textarea class="form-control" name="description" id="" cols="15" rows="3">{{$clubsection->description}}</textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label for="fname">Image</label>
                                            <input class="form-control" type="file" name="image" autofocus>  
                                        </div> 
                                        <div class="form-group">
                                            <img class="img-thumbnail" src="{{asset('storage/'.$clubsection->file_path)}}" width="70">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                                </td>
                                <td>
                                    <form action="{{route('del.club.section', ['id' =>$clubsection->id])}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete!')"><i class="fa fa-trash"></i></button>
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
