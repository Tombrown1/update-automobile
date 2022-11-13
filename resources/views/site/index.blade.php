

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
	<div class="section section-services">
	    <div class="container">
	        <div class="content row">
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">
					<div class="heading-box clearfix">
						<div class="col-sm-3">
							<h2 class="heading-section">Financial Specialists</h2>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<span>Years of knowledge, along with care and attention brings with us the greatest results for our clients.</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{asset('frontend/assets/image/photo-pt-a.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Market Analysis</h3>
									<div class="fbox-content">
										<p>For many residents throughout consec adipis elit sedo eius.</p>
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 odd">
						<!-- Feature box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{asset('frontend/assets/image/photo-pt-b.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Accounting Advisor</h3>
									<div class="fbox-content">
										<p>Our finance experience amet consec adipis elitmod tempor.</p>
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{asset('frontend/assets/image/photo-pt-c.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">General Consultancy</h3>
									<div class="fbox-content">
										<p>Sidid ipsum dolor sit amet consec adlit sed usmod cons.</p>
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-6 odd">
						<!-- Feature box -->
						<div class="feature">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{asset('frontend/assets/image/photo-pt-d.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">Structured Assessment</h3>
									<div class="fbox-content">
										<p>Sidid ipsum dolor sit amet consec adipis elit sed do eiusmo dcons.</p>
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>					
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
						<h5 class="heading-sm-lead">About us</h5>
						<h2 class="heading-section">Who we are</h2>
						<p>We are Finance Corp, We provide Finance consulting from 30 years.</p>
						<p>Accumsan est in tempus etos ullamcorper sem quam suscipit lacus maecenas tortor. Suspendisse gravida ornare non mattis velit rutrum modest sed do eiusmod tempor incididunt ut labore et dolore. </p>
						<p>We have one of the philo sophia nec mei maiorum appell antur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus egestas varius penatibus.</p>
					</div>  
					<div class="col-md-5 col-md-offset-1">
						<img class="no-round" src="{{asset('frontend/assets/image/photo-home-a.jpg')}}" alt="">
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
									<h4>Marketing</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box style-s1">
										<em class="fa fa-users" aria-hidden="true"></em>
									</div>
									<h4>Consultation</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
								</div>
								<div class="gaps size-lg"></div>
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box style-s1">
										<em class="fa fa-credit-card" aria-hidden="true"></em>
									</div>
									<h4>Accounting</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box style-s1">
										<em class="fa fa-trademark" aria-hidden="true"></em>
									</div>
									<h4>Trademarks</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>			
		</div>
		<div class="section-bg imagebg"><img src="{{asset('frontend/assets/image/photo-half-a.jpg')}}" alt=""></div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<div class="section section-contents section-pad has-bg fixed-bg light bg-alternet">
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
	</div>
	<!-- End Content -->
	<!-- Teams -->
	<div class="section section-teams section-pad bdr-bottom">
		<div class="container">
			<div class="content row">

				<div class="col-md-offset-2 col-md-8 center">
					<h5 class="heading-sm-lead">The Team</h5>
					<h2 class="heading-section">Our Advisors</h2>
				</div>
				<div class="gaps"></div>
				<div class="team-member-row row">
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Team Profile -->
						<div class="team-member">
							<div class="team-photo">
								<img alt="" src="{{asset('frontend/assets/image/team-a.jpg')}}">
							</div>
							<div class="team-info center">
								<h4 class="name">Robert Miller</h4>
								<p class="sub-title">Managing Director &amp; CEO</p>
							</div>
						</div>
						<!-- Team #end -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 odd">
						<!-- Team Profile -->
						<div class="team-member">
							<div class="team-photo">
								<img alt="" src="{{asset('frontend/assets/image/team-b.jpg')}}">
							</div>
							<div class="team-info center">
								<h4 class="name">Stephen Everett</h4>
								<p class="sub-title">Chief Financial Officer</p>
							</div>
						</div>
						<!-- Team #end -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Team Profile -->
						<div class="team-member">
							<div class="team-photo">
								<img alt="" src="{{asset('frontend/assets/image/team-c.jpg')}}">
							</div>
							<div class="team-info center">
								<h4 class="name">Philip Hennessy</h4>
								<p class="sub-title">Senior Tax Specialist</p>
							</div>
						</div>
						<!-- Team #end -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 odd">
						<!-- Team Profile -->
						<div class="team-member">
							<div class="team-photo">
								<img alt="" src="{{asset('frontend/assets/image/team-d.jpg')}}">
							</div>
							<div class="team-info center">
								<h4 class="name">Robert Miller</h4>
								<p class="sub-title">Chief Financial Advisor</p>
							</div>
						</div>
						<!-- Team #end -->
					</div>
				</div><!-- TeamRow #end -->
			</div>
		</div>
	</div>			
	<!-- End Section -->
	<!-- Latest News -->
	<div class="section section-news section-pad">
		<div class="container">
			<div class="content row">
				
				<h5 class="heading-sm-lead center">Latest News</h5>
				<h2 class="heading-section center">Our Financial Updates</h2>

				<div class="row">
					<!-- Blog Post Loop -->
					<div class="blog-posts">
						<div class="post post-loop  col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-a.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">15, Aug 2017</span></div>
								<h2><a href="news-details.html">Income Increase Shows the Recovery Is Very Much Real</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<div class="post post-loop col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-b.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">04, Jul 2017</span></div>
								<h2><a href="news-details.html">An Economics Nobel awarded for Examining Reality</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<div class="post post-loop col-md-4">
							<div class="post-thumbs">
								<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-c.jpg')}}"></a>
							</div>
							<div class="post-entry">
								<div class="post-meta"><span class="pub-date">26, Dec 2016</span></div>
								<h2><a href="news-details.html">Maybe Supply-Side Economics Deserves a Second Look</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Section -->
	
	

	<!-- Call Action -->
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at +012-345-6789. Please feel free to contact our expert.</p>
						<a class="btn btn-alt" href="#">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

@endsection