@extends('layouts.web')
@section('pageTitle', 'View Past President')
@section('content')

    @section('banner')
        <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">{{$past_president->name}}</h1>
							<p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta.</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="active"><span>News &amp; Media</span></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="{{asset('frontend/assets/image/banner-blog.jpg')}}" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
    @endsection
    
        <!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">
			
				<div class="blog-wrapper row">
					<div class="col-md-8 res-m-bttm">
							<h3 class="page-title">{{$past_president->name}}</h3>

						<div class="post post-single">
							<div class="post-thumbs">
								<img alt="" src="{{asset('storage/'.$past_president->image)}}">
							</div>
                            <br>
                            <div class="col d-flex content-justify-center">
                                <div class="row">
                                    <div class="col-md-3">
                                    <h6>Start Year</h6>	<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{\Carbon\Carbon::createFromTimeStamp(strtotime($past_president->start_date))->toFormattedDateString()}} </span>                               
							    </div>
                                <div class=" col-md-3">
                                     <h6>End Year</h6>	<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{\Carbon\Carbon::createFromTimeStamp(strtotime($past_president->end_date))->toFormattedDateString()}} </span>                             
							    </div>
                                </div>
                            </div>
							
                            
							<div class="post-entry">                               								
								<p>{!!($past_president->description) !!}</p>
							
							</div>
						</div>
						
					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">
							

							<div class="wgs-box wgs-recents">
								<h3 class="wgs-heading">Recent Posts</h3>
								<div class="wgs-content">
									<ul class="blog-recent">
                                        @foreach($blogs as $blog)
										<li>
											<a href="{{route('view.news.event', ['slug' =>$blog->slug])}}">
												<img alt="" src="{{asset('storage/'.$blog->featured_image)}}">
												<p> {{substr(strip_tags($blog->description), 0, 100)}} ...</p>
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>

							

							<div class="wgs-box wgs-contact-info">
								<h3 class="wgs-heading">Contact Information</h3>
								<div class="wgs-content boxed">
									<ul class="contact-list">
										<li>
											<i class="fa fa-map" aria-hidden="true"></i>
											<span>{{$setting->address}}</span>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>{{$setting->phone}}</span>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Email : <a href="#">{{$setting->email}}</a></span>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- Sidebar #end -->

				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->	
    		
@endsection