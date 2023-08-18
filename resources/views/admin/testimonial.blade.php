@extends('layouts.master')
@section('pageTitle', 'Testimonial')
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
              <h4>Happy Customers

                <a class="btn btn-success btn-xs float-right" href="{{ route('add.testimonial') }}" >Add Testimonial<i class="fa fa-plus fa-fw"></i></a>
              </h4>

             
            </div>

            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Names</th>
                        <th>Profession</th>
                        <th>Testimonial</th>
                        <th>Image</th>
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                         @foreach($testimonials as $testimonial)
                       <tr>
                         <td>{{$loop->index +1}}</td>
                          <td>{{strip_tags($testimonial->fname)}} {{strip_tags($testimonial->lname)}}</td>
                          <td>{{strip_tags($testimonial->specialization)}}</td>
                          <td>{{substr(strip_tags($testimonial->description), 0, 50)}}</td>
                          <td>
                            <img src="{{asset('storage/'.$testimonial->image)}}" width="70" class="img-thumbnail">
                          </td>
                          <td>
                            <form action="#" method="post">          
                              <a href="{{route('edit.testimonial', ['id' => $testimonial->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>                              
                            </form>
                          </td>
                          <td>
                            <form action="{{route('delete.testimonial', ['id' => $testimonial->id])}}" method="post">
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


@endsection