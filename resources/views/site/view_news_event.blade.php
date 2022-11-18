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
							<h1 class="page-title">{{$blogview->title}}</h1>
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
			
				<div class="blog-wrapper row">
					<div class="col-md-8 res-m-bttm">
							<h3 class="page-title">{{$blogview->title}}</h3>
						<div class="post post-single">
							<div class="post-thumbs">
								<img alt="" src="{{asset('storage/'.$blogview->featured_image)}}">
							</div>
							<div class="post-meta">
								<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{\Carbon\Carbon::createFromTimeStamp(strtotime($blogview->created_at))->toFormattedDateString()}} </span>
							</div>
							<div class="post-entry">
								<h1>{{$blogview->title}}</h1>
								<p>{!! nl2br($blogview->description) !!}</p>
							
							</div>
						</div>
						
					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">
							<!-- <div class="wgs-box wgs-search">
								<div class="wgs-content">
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Search...">
										<button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
								</div>
							</div> -->

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