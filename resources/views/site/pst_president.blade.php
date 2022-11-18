@extends('layouts.web')
@section('pageTitle',  'Past President')
@section('content')


    @section('banner')
    <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">Past President</h1>
							<p></p>						
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
						<!-- Blog Post Loop -->
						<div class="row">
							<ul class="blog-posts post-col2">
								@foreach($past_presidents as $past_president)
						
								<li class="post post-loop col-md-6">
									<div class="post-thumbs">
										<a href="{{route('view.past.president', ['slug' => $past_president->slug])}}"><img class="thumbnail" src="{{asset('storage/'.$past_president->image)}}" width="100"></a>
									</div>
									<div class="post-entry">
										<div class="post-meta">
											<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($past_president->created_at))->toFormattedDateString() }} </span>
										</div>
										<h2><a href="{{route('view.past.president', ['slug' => $past_president->slug])}}">{{$past_president->name}}</a></h2>
										<p> {{substr(strip_tags($past_president->description),0, 150)}} ...</p>
										<a class="btn  btn-alt" href="{{route('view.past.president', ['slug' =>$past_president->slug])}}">More Info</a>
									</div>
								</li>
								@endforeach
								
								
							
							</ul>
						</div>
						<div class="clear"></div>
						<!-- <ul class="pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
							</a></li>
						</ul> -->
						<!-- End Blog Post -->
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


