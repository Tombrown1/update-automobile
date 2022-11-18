@extends('layouts.web')
@section('pageTitle', 'Sports Section')
@section('content')

    @section('banner')
        <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">Photo Section</h1>
							<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat do eiusmod tempor incidid.</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li class="active"><span>Our Gallery</span></li>
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

    <!-- Content Section -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">			
							
				
				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Section</h2>
					<!-- <p>Gallery in grid mode with 3 columns.</p> -->
				</div>
				<!-- Gallery -->
				<div class="gallery gallery-col3 gallery-grids gallery-with-caption hover-zoom">

					<ul class="gallery-list">

					@foreach($clubsections as $clubsection)
						<li>
							<div class="gallery-item">
								<img src="{{asset('storage/'.$clubsection->file_path)}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="{{route('section.view', ['slug' => $clubsection->slug])}}"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('storage/'.$clubsection->file_path)}}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption dark">
									<p class="item-cat">Design</p>
									<h4 class="item-title">{{$clubsection->name}}</h4>
								</div>
							</div>
						</li>
					@endforeach
					</ul>

				</div>
				<!-- Gallery #end -->
				
				
				
			</div>
		</div>		
	</div>
	<!-- End Section -->


@endsection