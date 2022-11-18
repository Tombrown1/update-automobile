@php
 $abouts = \App\Models\About::where('deleted', 0)->get(); 
 $setting = \App\Models\Setting::find(1);

@endphp
<!-- Footer Widget-->
	<div class="footer-widget style-v2 section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<!-- <h5 class="wgs-title">About Us</h5> -->
							<img src="{{asset('storage/'.$setting->logo)}}" width="150" class="img-thumbnail">
							<br>
							<!-- <div class="wgs-content">
							</div> -->
							<div class="wgs-content">
								<ul class="menu">
									@foreach($abouts as $about)
									<li><a href="#">{{$about->name}}</a></li>									
									@endforeach
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Explore</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="{{route('web.gallery')}}">Photo Gallery</a></li>
									<li><a href="{{route('section')}}">Sections</a></li>
									<!-- <li><a href="#">Our Services</a></li> -->
									<li><a href="{{route('news.events')}}">News & Events</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Download membership form</a></li>
									<li><a href="#">Download Membership Revalidation form</a></li>
									<li><a href="#">Constitution and by laws</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-2 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Follow us on</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="{{$setting->facebook}}">Facebook</a></li>
									<li><a href="{{$setting->twitter}}">Twitter</a></li>
									<li><a href="{{$setting->linkedin}}">Linkedin</a></li>
									<li><a href="{{$setting->googleplus}}">Google+</a></li>
									<li><a href="#">YouTube</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Address</h5>
							<div class="wgs-content">
								<p>
									{{$setting->address}}</p>
									<span>Phone</span>:{{$setting->phone}}</p>
								<ul class="social">
									<li><a href="{{$setting->facebook}}"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="{{$setting->twitter}}"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="{{$setting->linkedin}}"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->