@extends('layouts.master')
@section('pageTitle', 'Board')
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
             <!-- Filter Management Team -->
              <div class="col-md-6 d-flex justify-content-center float-right">
                  <div class="col-md">
                    <form action="" >
                    <div class="form-group">
                        <select name="id" id="" class="form-control">
                          <option value="">All Team</option>
                        @foreach($boardcats as $board_cat)
                            <option value="{{$board_cat->id}}">{{$board_cat->name}}</option>
                        @endforeach
                        </select>                        
                    </div>
                  </div>
                  <div class="col">
                     <button type="submit" class="btn btn-primary">Filter</button>
                  </div>
                 </form>
                 <div class="col">
                     <button class="btn btn-success btn-xs " data-toggle="modal" data-target="#addSession">Add Board Form<i class="fa fa-plus fa-fw"></i></button> 
                 </div>
              </div>
              <h4>Management Team  </h4>             
            <div class="p-3">                
              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Board</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('create.board') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">Name</label>                     
                                <input class="form-control" type="text" name="name" required autofocus>
                            </div> 
                             <div class="form-group">
                                <label for="fname">Position</label>                     
                                <input class="form-control" type="text" name="post" required autofocus>
                            </div> 
                             <div class="form-group">
                               <select name="board_cat_id" id="" class="form-control">
                                @foreach($boardcats as $board_cat)
                                    <option value="{{$board_cat->id}}">{{$board_cat->name}}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>                     
                                <input class="form-control" type="file" name="image" autofocus>
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
                        <th>Post</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($boards as $board)
                        <tr>
                          <td>{{$loop->index +1}}</td>
                          <td>{{$board->name}}</td>
                          <td>{{$board->post}}</td>
                          <td>{{substr(strip_tags($board->description), 0, 100)}}</td>
                          <td>
                            <form action="#" method="post">          
                              <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editboard"><i class="fa fa-edit"></i></a>                              
                            </form>
                          </td>
                           <div class="modal fade mt-5" id="editboard" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="addCourseLabel">Edit Board</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('create.board') }}" >
                                      {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label for="fname">Name</label>                     
                                            <input class="form-control" type="text" name="name" value="{{$board->name}}" required autofocus>
                                        </div> 
                                        <div class="form-group">
                                            <label for="fname">Position</label>                     
                                            <input class="form-control" type="text" name="post" value="{{$board->post}}" required autofocus>
                                        </div> 
                                        <div class="form-group">
                                          <select name="board_cat_id" id="" class="form-control">
                                            @foreach($boardcats as $board_cat)
                                                <option value="{{$board_cat->id}}">{{$board_cat->name}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>                     
                                            <input class="form-control" type="file" name="image" autofocus>
                                            <img class="img-thumbnail" src="{{asset('storage/'.$board->image)}}" width="70">
                                        </div> 

                                        <div class="form-group mb-3">
                                          <label for="descp">Description</label>
                                          <textarea class="form-control" name="description" id="" cols="15" rows="3">{{strip_tags($board->description)}}</textarea>
                                        </div> 
                                        
                                        <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <td>
                            <form action="{{route('delete.board', ['id' => $board->id])}}" method="post">
                              @csrf
                              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')"><i class="fa fa-trash"></i></button>                              
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
