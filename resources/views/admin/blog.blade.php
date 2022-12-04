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
              <h4>All Post

                <!-- <a class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Create Post <i class="fa fa-plus fa-fw"></i></a> -->
                <a class="btn btn-success btn-xs float-right" href="{{route('create.post')}}">Create Post <i class="fa fa-plus fa-fw"></i></a>
              </h4>

              
            </div>

            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Title</th>                        
                        <th>Image</th>                        
                        <th>Date Published</th>
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($blogposts as $blogpost)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td><a href="#">{{$blogpost->title}}</a></td>
                                <td><img src="{{asset('storage/'.$blogpost->featured_image)}}" width="70" class="thumbnail"></td>
                                <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($blogpost->created_at))->toFormattedDateString() }}</td>
                                <td>
                                    <form action="#" method="post">
                                        <a class="btn btn-primary btn-sm" href="{{route('edit.blog.post', ['id'=> $blogpost->id])}}"><i class="fa fa-edit"></i></a>
                                    </form>
                                </td>
                                
                                <td>
                                    <form action="{{route('del.blog', ['id' => $blogpost->id])}}" method="post">
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
