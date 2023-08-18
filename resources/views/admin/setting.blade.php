@extends('layouts.master')
@section('pageTitle', 'Site Settings')
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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Site Settings</a>
              </li>
              

              <li class="nav-item">
                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="session-tab" data-toggle="tab" href="#session" role="tab" aria-controls="session" aria-selected="false">Admins</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="false">Logo</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="p-3">
                  <h4>setting Settings</h4>
                </div>
                <form method="POST" action="{{route('update.setting')}}" enctype="multipart/form-data">
                  @csrf                 
                  <div class="form-body">
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Site Name</label>
                        <input type="text" name="sitename" class="form-control" required="" value="{{$setting->sitename}}">
                      </div>

                      <div class="form-group">
                        <label>Site Email</label>
                        <input type="email" name="email" class="form-control" value="{{$setting->email}}" required="">
                      </div>

                      <div class="form-group">
                        <label>Site Phone Number</label>
                        <input type="tel" name="phone" class="form-control" value="{{$setting->phone}}" required="">
                      </div>

                      <div class="form-group">
                        <label>Business Address</label>
                        <input type="text" name="address" class="form-control" value="{{$setting->address}}" required="">
                      </div>
                      <div class="form-group">
                        <label>Facebook Page</label>
                        <input type="text" name="facebook" class="form-control" value="{{$setting->facebook}}">
                      </div>

                      <div class="form-group">
                        <label>Twitter Page</label>
                        <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
                      </div>

                      <div class="form-group">
                        <label>LinkedIn Page</label>
                        <input type="text" name="linkedin" class="form-control" value="{{$setting->linkedin}}">
                      </div>


                    </div>
                  </div>
                  <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="p-3">
                  <h4>About</h4>
                </div>
                <form method="POST" action="{{route('about.setting')}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-body">
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Vision</label>
                        <textarea name="vision" class="form-control">{{ $setting->vision }}</textarea>
                      </div>

                      <div class="form-group">
                        <label>Mission</label>
                        <textarea name="mission" class="form-control">{{ $setting->mission }}</textarea>
                      </div> 
                      <div class="form-group">
                        <label>Core Value</label>
                        <textarea name="core_value" class="form-control">{{ $setting->core_value }}</textarea>
                      </div>
                      <div class="form-group">
                        <label>About Image</label>
                       <input type="file", name="about_image" class="form-control" value="{{$setting->about_image}}">
                      </div>

                      <div class="form-group">
                          <label>About Us</label>
                          <textarea  class="form-control" id="editorabout" rows="50" cols="110" name="about">{{ $setting->about }}
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'editorabout' );
                          </script>
                        </div>

                    </div>
                  </div>
                  <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>


              <div class="tab-pane fade" id="session" role="tabpanel" aria-labelledby="session-tab">
                <div class="p-3">
                  <h4>Site Admins
                  <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button></h4>
                </div>
                <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addCourseLabel">Add Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="{{route('new.user')}}" method="POST" >
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label> Email </label>
                            <input type="email" name="email" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" required="">
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="table-responsive p-2">
                  <table class="table table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                          <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                           <td>
                             <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editgallery"><span class="fa fa-edit"></span></button>
                           </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="standard-tab">
                <div class="p-3">
                  <h4>Upload Logo</h4>
                </div>
                <form method="POST" action="{{route('upload.logo')}}" enctype="multipart/form-data" class="form-inline">
                  @csrf
                  
                      <div class="form-group">
                        <input type="file" name="logo" class="form-control" required>
                      </div>
                     

                      <button type="submit" class="btn btn-primary">Upload</button>

                </form>
                <div class="m-4">
                   <div class="form-group">
                        <img src="{{asset('storage/'.$setting->logo)}}" width="300" class="img-thumbnail">
                      </div>
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
