@extends('layouts.master')
@section('pageTitle', 'New Post')
@section('content')
<div class="content">
  <div class="container">
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
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Edit Blog Post</h3>
            <a class="btn btn-primary btn-xs float-right" href="{{route('blog')}}">Back <i class="fa fa-plus fa-bw"></i></a>
          </div>

          <div class="card-body">
            <form role="form" enctype="multipart/form-data" action="{{route('update.blog.post', ['id' => $blogpost->id])}}" method="post" >
                {{ csrf_field() }}

                
                <div class="row">
                  <div class="col-md-1 col-sm-1">                    
                  </div>
                  <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="disabledSelect">Enter Title</label>
                      <input class="form-control" type="text" name="title" value="{{$blogpost->title}}" Required/>
                    </div>
                    <div class="form-group">
                      <label for="disabledSelect">Select Category</label>
                      <select name="blog_cat_id" id="" class="form-control">
                        @foreach($blogcategorys as $blogcategory)
                            <option value="{{$blogcategory->id}}">{{$blogcategory->title}}</option>
                        @endforeach                            
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Add Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                      <div class="form-group">
                       <img class="img-thumbnail" src="{{asset('storage/'.$blogpost->featured_image)}}" width="70">
                    </div>
                    <div class="form-group">
                      <label for="your-label" class="form-label">Post</label>
                      <textarea  class="form-control" id="editor1" rows="50" cols="110" name="description">{{$blogpost->description}}
                      </textarea>
                      <script>
                          // Replace the <textarea id="editor1"> with a CKEditor
                          // instance, using default configuration.
                          CKEDITOR.replace( 'editor1' );
                      </script>
                      <div class="form-group">
                        <button class="btn btn-primary float-right mt-2" type="submit" >Submit</button>
                      </div>
                    </div>  
                  </div>
                  <div class="col-md-1 col-sm-1">                    
                  </div>
                </div> 
            </form>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div>
@endsection
