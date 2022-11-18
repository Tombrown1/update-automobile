@extends('layouts.web')
@section('pageTitle',  $about->name)
@section('content')


@section('banner')
    <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">{{$about->sitename}}</h1>
							<p>{!!substr(nl2br($about->about),0, 130)!!}.</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="{{url('/')}}">Home</a></li>
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
							<h3 class="page-title">{{$about->sitename}}</h3>					
						<p>{!!nl2br($about->about)!!}.</p>						
						
						
						<h4>Our Vision</h4>
						<p>{{$about->vision}}</p>
						<h4>Our Mission</h4>
						<p>{{$about->vision}}</p>
						<div class="gaps"></div>
						
					
							<h4>Our Values</h4>
							<ul>
								<li>Innovation</li>
								<li>Excellence</li>
								<li>Respect</li>
								<li>Integrity</li>
								<li>Responsibility</li>
							</ul>
				
						<div class="clear"></div>
						
						
						
					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">

							<div class="wgs-box wgs-menus">
								<div class="wgs-content">
									<ul class="list list-grouped">
										<li class="list-heading">
											<span>Aba Sports Club Sections</span>
											<ul>
												<li><a href="#">Overview</a></li>
													@foreach($sectioncats as $sectioncat)
												<!-- <li class="current"><a href="#">Mission &amp; Vision</a></li> -->
											 <li><a href="{{route('section.view', ['slug' => $sectioncat->slug])}}">{{$sectioncat->club_category->name}}</a></li>
													<!--<li><a href="#">Management Team</a></li> -->
													@endforeach
											</ul>
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
	<!-- End content -->
@endsection



@endsection