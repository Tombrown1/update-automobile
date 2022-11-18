@php


@endphp

@extends('layouts.web')
@section('pageTitle', 'News & Events')
@section('content')

    @section('banner')
        <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">News & Events</h1>
							<p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta.</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index-2.html">Home</a></li>
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

				<div class="row">
					<div class="col-md-8">
						<!-- Blog Post Loop -->
						<div class="row">
							<ul class="blog-posts post-col2">
								@foreach($blogs as $blog)
						
								<li class="post post-loop col-md-6">
									<div class="post-thumbs">
										<a href="news-details.html"><img alt="" src="{{asset('storage/'.$blog->featured_image)}}"></a>
									</div>
									<div class="post-entry">
										<div class="post-meta">
											<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($blog->created_at))->toFormattedDateString() }} </span>
										</div>
										<h2><a href="{{route('view.news.event', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>
										<p> {{substr(strip_tags($blog->description),0, 150)}} ...</p>
										<a class="btn  btn-alt" href="{{route('view.news.event', ['slug' =>$blog->slug])}}">Read More</a>
									</div>
								</li>
								@endforeach
								
								
							
							</ul>
						</div>
						<div class="clear"></div>
						<ul class="pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
							</a></li>
						</ul>
						<!-- End Blog Post -->
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
												<img alt=""src="{{asset('storage/'.$blog->featured_image)}}" >
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
											<span>{{$about->address}}</span>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>{{$about->phone}}</span>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Email : <a href="#">{{$about->email}}</a></span>
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