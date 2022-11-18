@extends('layouts.master')
@section('pageTitle', 'Past President')
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
                  
                 <div class="col">
                     <button class="btn btn-success btn-xs " data-toggle="modal" data-target="#addSession">Add Past President<i class="fa fa-plus fa-fw"></i></button> 
                 </div>
              </div>
              <h4>Past President</h4>             
            <div class="p-3">                
              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Past President</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ route('create.past.president') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">First Name</label>                     
                                <input class="form-control" type="text" name="fname" required autofocus>
                            </div> 
                            <div class="form-group">
                                <label for="lname">Last Name</label>                     
                                <input class="form-control" type="text" name="lname" required autofocus>
                            </div> 
                             
                            <div class="form-group">
                                <label for="start_date">Start Date</label>                     
                                <input class="form-control" type="date" name="start_date" required autofocus>
                            </div> 
                            
                            <div class="form-group">
                                <label for="end_date">End Date</label>                     
                                <input class="form-control" type="date" name="end_date" required autofocus>
                            </div>
                           
                            <div class="form-group">
                                <label for="image">Image</label>                     
                                <input class="form-control" type="file" name="image" autofocus>
                            </div> 
                            <div class="form-group mb-3">
                              <label for="desc">Description</label>
                              <textarea class="form-control" name="desc" id="" cols="10" rows="3"></textarea>
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
                        <th>Image</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($past_presidents as $past_president)
                        <tr>
                          <td>{{$loop->index +1}}</td>
                          <td>{{$past_president->name}}</td>
                          <td><img class="thumbnail" src="{{asset('storage/'.$past_president->image)}}" width="70"></td>
                          <td>{{substr(strip_tags($past_president->description), 0, 100)}}</td>
                          <td>{{$past_president->start_date}}</td>
                          <td>{{$past_president->end_date}}</td>

                          <td>
                            <form action="#" method="post">          
                              <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editpp{{$past_president->id}}"><i class="fa fa-edit"></i></a>                              
                            </form>
                          </td>
                           <div class="modal fade mt-5" id="editpp{{$past_president->id}}" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="addCourseLabel">Edit past_president</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{route('edit.past.president', ['id' => $past_president->id])}}" >
                                      {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label for="name">Name</label>                     
                                            <input class="form-control" type="text" name="name" value="{{$past_president->name}}" required autofocus>
                                        </div>                                        
                                        
                                        <div class="form-group">
                                            <label for="image">Image</label>                     
                                            <input class="form-control" type="file" name="image" autofocus>
                                            <img class="img-thumbnail" src="{{asset('storage/'.$past_president->image)}}" width="70">
                                        </div> 
                                        <div class="form-group">
                                            <label for="name">Start Date</label>                     
                                            <input class="form-control" type="date" name="start_date" value="{{$past_president->start_date}}" required autofocus>
                                        </div>                                         
                                        <div class="form-group">
                                            <label for="name">End Date</label>                     
                                            <input class="form-control" type="date" name="end_date" value="{{$past_president->end_date}}" required autofocus>
                                        </div> 

                                        <div class="form-group mb-3">
                                          <label for="descp">Description</label>
                                          <textarea class="form-control" name="desc" id="" cols="15" rows="3">{{strip_tags($past_president->description)}}</textarea>
                                        </div> 
                                        
                                        <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <td>
                            <form action="{{route('delete.past.president', ['id' => $past_president->id])}}" method="post">
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
