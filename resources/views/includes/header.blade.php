
<!-- Header --> 
@php
 $abouts = \App\Models\About::where('deleted', 0)->get();
 $services = \App\Models\Service::where('deleted', 0)->get();
$uploads = \App\Models\Upload::where('deleted', 0)->get();
$setting = \App\Models\Setting::find(1);
@endphp
	<header class="site-header header-s1 is-sticky">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					
					<div class="top-aside top-right clearfix">
						<ul class="top-contact clearfix">
							<li class="t-email t-email1">
								<em class="fa fa-envelope-o" aria-hidden="true"></em>
								<span><a href="#">{{$setting->email}}</a></span>
							</li>
							<li class="t-phone t-phone1">
								<em class="fa fa-phone" aria-hidden="true"></em>
								<span>{{$setting->phone}}</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- #end Topbar -->
		<!-- Navbar -->
		<div class="navbar navbar-primary" style="height: 90px;">
			<div class="container">
				<!-- Logo -->
				<div class="d-flex align-items-center">
					<a class="navbar-brand" href="{{url('/')}}">
						<img style="height: 40px;" class="logo logo-dark" src="{{asset('images/logo.png')}}">		
						<!-- <img class="logo logo-light" alt="" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo.png')}}">			 -->
					</a>
					<!-- #end Logo -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Q-Button for Mobile -->
						<div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
					</div>
					<!-- MainNav -->
					<nav class="navbar-collapse collapse" id="mainnav">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{url('/')}}">Home</a></li>
							<li class="dropdown"><a href="#">About Club <b class="caret"></b></a>
								<ul class="dropdown-menu">
									@foreach($abouts as $about)
									<li><a href="{{route('about.view', ['slug' => $about->slug])}}	">{{$about->name}}</a></li>
														
									@endforeach
									<li><a href="{{route('web.past.president')}}">Past President</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#">Membership<b class="caret"></b></a>
								<ul class="dropdown-menu">
									@foreach($uploads as $upload)
									<li><a href="{{asset('storage/'.$upload->file_path)}}"target="_blank">{{$upload->title}}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle">Services <b class="caret"></b></a>
								<ul class="dropdown-menu">
									@foreach($services as $service)
									<li><a href="{{route('view.services', ['slug' => $service->slug])}}" >{{$service->name}}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="dropdown"><a href="#">Section<b class="caret"></b></a>
								<ul class="dropdown-menu">
									
									<li><a href="{{route('section')}}"target="#">Section</a></li>
									<li><a href="{{route('web.gallery')}}"target="#">Gallery</a></li>
								
								</ul>
							</li>
							<li><a href="{{route('news.events')}}">News & Events</a></li>
							<li class="quote-btn"><a class="btn" href="{{route('contact')}}">Contact us</a></li>
						</ul>
					</nav>     
					<!-- #end MainNav -->

				</div>
			</div>
		</div>
		<!-- #end Navbar -->
		<!-- Banner/Slider -->
		@yield('banner')
		<!-- #end Banner/Slider -->
	
	</header>
	<!-- End Header -->