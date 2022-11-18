@extends('layouts.web')
@section('pageTitle', 'View Service')
@section('content')

@section('banner')
    <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">{{$service->name}}</h1>
							<p>{{substr(strip_tags($service->description), 0, 50)}}</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="active"><span>Our Services</span></li>
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

    <div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="row">
				
				<div class="row row-vm reverses">
					<div class="col-md-6 col-sm-6 res-m-bttm pad-r">
						<a href="#"><img class="img-shadow" src="{{asset('storage/'.$service->image)}}" alt=""></a>
					</div>
					<div class="col-md-6 col-sm-6 pad-l">
						<h2 class="heading">{{$service->name}}</h2>
						<!-- <p class="lead">Investment Planning improves the sed eiusod tempor incididunt ut labore dolore.</p> -->
						<p>{{strip_tags($service->description)}}.</p>
						<!-- <p><a href="#" class="btn btn-outline">More about Services</a></p> -->
					</div>
				</div>
				
			</div>
		</div>
	</div>


@endsection