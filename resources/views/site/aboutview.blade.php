@extends('layouts.web')
@section('pageTitle', $about->name)
@section('content')

@section('banner')
    <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">{{$about->name}}</h1>
							<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat do eiusmod tempor incidid.</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li class="active"><span>About Us</span></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="{{asset('frontend/assets/image/banner-inside-a.jpg')}}" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
    @endsection
    <!-- Content -->
	<div class="section section-contents section-pad">
		<div class="container">
		
			<div class="content row">

				<div class="row">
					<div class="col-md-8">
					
						<p>Our <strong>financial planning expertise</strong> covers eiusmod tempor dunt ut labore et dolore mane eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit sed do eiusmod tempor incididunt bore eter dolore magna aliqua quis nostrud exercita ullam uconse.</p>
						
						<div class="gaps"></div>
						<div class="col-md-7 npl res-m-bttm">
							<h4>CAPABILITIES</h4>
							<p>Lorem ipsum dolor sit amet, consecteturt adipiscing elit sed do eiusmod tempor incididunt bore eter dolore magna aliqua  quis nostrud exercitation ullamci uconsequat. Lorem ipsum dolor sit amet, consecteturt adipiscing elit sed tempor.</p>
						</div>
						<div class="col-md-4 npr col-md-offset-1">
							<h4>SPECIALISED</h4>
							<p>Lorem ipsum dolor sit amet, consecteturt adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>

						<div class="clear"></div>
						<hr>
						<h2>Our Strategic Planning</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consecte iscing elit sed do eiusmod tempor incididunt bore eter dolore magna aliqua quis nostrud exercita.</p>
						<div class="gaps"></div>
						<h4>Our Vision</h4>
						<p>Consecteturt adipiscing elit sed do eiusmod tempor incididunt quis nostrud exercation ullamco laboris nisi ution aliquip exon  eiusmod tempor commodo conquat.</p>
						<h4>Our Mission</h4>
						<p>To strive towards adding value to the consect tempor incididunt quis nostrud aliquip exon  eiusmod tempor commodo conquat exercation ullamco laboris nisi ution.</p>
						<div class="gaps"></div>
						<div class="col-md-7 npl res-m-bttm">
							<h4>Our Strategy</h4>
							<p>To identify potential areas of improvement within the ipsum dolor sit amet onsectetur adipiscing elit. These eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exepion ullamco laboris nisi ution aliquip exon cmodo.</p>
						</div>
						<div class="col-md-4 npr col-md-offset-1">
							<h4>Our Values</h4>
							<ul>
								<li>Innovation</li>
								<li>Excellence</li>
								<li>Respect</li>
								<li>Integrity</li>
								<li>Responsibility</li>
							</ul>
						</div>
						<div class="clear"></div>
						
						
						
					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">

							<div class="wgs-box wgs-menus">
								<div class="wgs-content">
									<ul class="list list-grouped">
										<li class="list-heading">
											<span>About Our Firms</span>
											<ul>
												<li><a href="about-us.html">Overview</a></li>
												<li class="current"><a href="about-us-alter.html">Mission &amp; Vision</a></li>
												<li><a href="teams.html">Board Of Directors</a></li>
												<li><a href="teams-alter.html">Management Team</a></li>
											</ul>
										</li>
										<li><a href="testimonial.html"><span>Testimonials</span></a></li>
										<li><a href="faqs.html"><span>Frequently Ask Questions</span></a></li>
									</ul>
								</div>
							</div>
							
							<div class="wgs-box boxed bg-secondary light">
								<div class="wgs-content">
									<h3>Need Help To Grow Your Business?</h3>
									<p>Investment Expert will help you start your own company.</p>
									<a href="contact.html" class="btn btn-light"> Get In Touch</a>
								</div>
							</div>
							
							<div class="wgs-box boxed light has-bg has-bg-image">
								<div class="wgs-content">
									<h3>Innovative Tools for Investor</h3>
									<p>We employ a long-established strategy, sector-focused investing across all of our markets globally...</p>
									<a href="service-single.html" class="btn btn-alt btn-outline"> Learn More</a>
								</div>
								<div class="wgs-bg imagebg">
									<img src="image/photo-sd-a.jpg" alt="">
								</div>
							</div>
							
						</div>
					</div>
					<!-- Sidebar #end -->
				</div>

			</div>
		</div>
	</div>
	<!-- End content -->
@endsection