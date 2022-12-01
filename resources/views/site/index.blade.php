

@extends('layouts.web')
@section('pageTitle', 'Home')
@section('content')

@section('banner')
	<!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider slider-large carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			
			<div class="carousel-inner">
				@foreach($sliders as $key => $slider)
					<div class="item {{$key == 0 ? 'active' : ''}}">
						<!-- Set the first background image using inline CSS below. -->
						<!-- <div class="fill" style="background-image:url('frontend/assets/image/slider-lg-a.jpg');"> -->
						<div class="fill" style="background-image: url( {{asset('storage/'.$slider->image) }} ); background-position: center center; background-repeat: no-repeat;">
							<!-- <div class="banner-content">
								<div class="container">
									<div class="row">
										<div class="banner-text al-left pos-left light">
											<h2>Fit your life and budget<strong>.</strong></h2>
											<p>We provide independent advice based on established research methods, and our experts have in-depth sector knowledge.</p>
											<a href="#" class="btn">Learn more</a>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				@endforeach
				<!-- <div class="item"> -->
					<!-- Set the second background image using inline CSS below. -->
					<!-- <div class="fill" style="background-image:url('frontend/assets/image/slider-lg-b.jpg');">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<h2>Expert Financial Advice<strong>.</strong></h2>
										<p>We help clients find ways to turn into actionable insights by embedding economics across their organization’s strategy.</p>
										<a href="#" class="btn">Learn more</a>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div> -->
			</div>
		
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- #end Banner/Slider -->
@endsection

	<!-- Service Section -->
	<div class="section section-services" style="margin-top: -220px;">
	    <div class="container">
	        <div class="content row">
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">
					<div class="heading-box clearfix">
						<div class="col-sm-3">
							<h2 class="heading-section">Sports is Life</h2>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<!-- <span><q>The only one who can tell you 'you can't win' is you and you don't have to listen</q></span> -->
							<span><q>What water is to the body is what sports is to our health, So kindly be Sportify at all times</q></span>
						</div>
					</div>
					@foreach($sectioncats as $sectioncat)
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->						
						<div class="feature">
							<a href="{{route('section.view', ['slug' => $sectioncat->slug])}}">
								<div class="fbox-photo">
									<img src="{{asset('storage/'.$sectioncat->file_path)}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">{{$sectioncat->club_category->name}}</h3>
									<div class="fbox-content">
										<p>{{$sectioncat->description}}</p>
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					@endforeach			
				</div>
				<!-- Feture Row  #end -->

	        </div>
	    </div>
	</div>
	<!-- End Section -->

 <!-- Content -->
	<div class="section section-content section-pad">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-md-6 res-m-bttm">
						<!-- <h5 class="heading-sm-lead">About us</h5> -->
						<h2 class="heading-section">WELCOME TO ABA SPORTS CLUB</h2>
						<p>{!! nl2br(substr(strip_tags($about->about), 0, 800)) !!}</p>
						<a class="btn btn-alt d-flex justify-content-center float-right" href="{{route('about')}}">Read More</a>
						
					</div>  
					<div class="col-md-5 col-md-offset-1">
						<h2 class="heading-section">Governor of Abia State</h2>
						<img  src="{{asset('storage/'.$abouts->image)}}" alt="">
					</div>
				</div>
				
			</div>	
		</div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<div class="section section-contents section-pad image-on-right bg-light">
		<div class="container">
			<div class="row">
			
				<h5 class="heading-sm-lead">Our Services</h5>
				<h2 class="heading-section">What we do</h2>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-7 col-md-6">
							<div class="row">
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box style-s1 photo-plx-full">
										<em class="fa fa-bar-chart-o" aria-hidden="true"></em>
									</div>
									<h4>Vision Statement</h4>        
									<p>{{substr($about->vision, 0,150)}}.</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box style-s1">
										<em class="fa fa-users" aria-hidden="true"></em>
									</div>
									<h4>Mission</h4>
									<p>{{substr($about->mission, 0, 150)}}.</p>
								</div>
								<div class="gaps size-lg"></div>
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box style-s1">
										<em class="fa fa-credit-card" aria-hidden="true"></em>
									</div>
									<h4>Core Value</h4>
									<p>{{substr($about->core_value, 0,150)}}.</p>
								</div>
								<!-- <div class="col-sm-6">
									<div class="icon-box style-s1">
										<em class="fa fa-trademark" aria-hidden="true"></em>
									</div>
									<h4>Trademarks</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
								</div> -->
							</div>
						</div>
					</div>

				</div>

			</div>			
		</div>
		<div class="section-bg imagebg"><img src="{{asset('images/executive_apartment.jpg')}}" alt=""></div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<!-- <div class="section section-contents section-pad has-bg fixed-bg light bg-alternet">
		<div class="container">
			<div class="row">
				
				<div class="row">
					<div class="col-md-4 pad-r res-m-bttm">
						<h2 class="heading-lead">FinanceCorp team provide independent advice based on established research methods.</h2>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-sm-6 res-s-bttm">
								<div class="icon-box style-s4 photo-plx-full">
									<em class="fa fa-bar-chart-o" aria-hidden="true"></em>
								</div>
								<h4>Experienced</h4>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>
							</div>
							<div class="col-sm-6">
								<div class="icon-box style-s4">
									<em class="fa fa-users" aria-hidden="true"></em>
								</div>
								<h4>Vibrant</h4>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>
							</div>
							<div class="gaps size-lg"></div>
							<div class="col-sm-6 res-s-bttm">
								<div class="icon-box style-s4">
									<em class="fa fa-credit-card" aria-hidden="true"></em>
								</div>
								<h4>Professional</h4>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>
							</div>
							<div class="col-sm-6">
								<div class="icon-box style-s4">
									<em class="fa fa-trademark" aria-hidden="true"></em>
								</div>
								<h4>Trademarks</h4>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>
							</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bg imagebg"><img src="{{asset('frontend/assets/image/plx-full.jpg')}}" alt=""></div>
	</div> -->
	<!-- End Content -->
	
	<!-- Latest News -->
	<div class="section section-news section-pad">
		<div class="container">
			<div class="content row">
				
				<!-- <h5 class="heading-sm-lead center">Latest News</h5> -->
				<h2 class="heading-section center">News & Events</h2>

				<div class="row">
					<!-- Blog Post Loop -->
					@foreach($blog_posts as $blog_post)
						<div class="blog-posts">
						<div class="post post-loop  col-md-4">
							<div class="post-thumbs">
								<a href="{{route('view.news.event', ['slug' => $blog_post->slug])}}"><img alt="" src="{{asset('storage/'.$blog_post->featured_image)}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">{{$blog_post->created_at->diffForHumans()}}</span></div>
								<h2><a href="{{route('view.news.event', ['slug' => $blog_post->slug])}}">{{$blog_post->title}}</a></h2>
								<p>{{substr(strip_tags($blog_post->description), 0, 150)}} ...</p>
								<a class="btn btn-alt" href="{{route('view.news.event', ['slug' => $blog_post->slug])}}">Read More</a>
							</div>
						</div>
                    </div>
					@endforeach
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Section -->
	

	<!-- Call Action -->
	<div class="call-action cta-small has-bg " style="background-image: url('image/plx-cta.jpg'); background-color:#3B2D62">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at {{$about->phone}}. Please feel free to contact our expert.</p>
						<a class="btn btn-alt" href="{{route('contact')}}">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

@endsection