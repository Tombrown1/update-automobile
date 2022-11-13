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
							<h1 class="page-title">News & Events</h1>
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

				<div class="row">
					<div class="col-md-8">
						<!-- Blog Post Loop -->
						<div class="row">
							<ul class="blog-posts post-col2">
						
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-a.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">Income Increase Shows the Recovery Is Very Much Real</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>
							
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-b.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">An Economics Nobel awarded for Examining Reality</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>
							
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-c.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">Maybe Supply-Side Economics Deserves a Second Look</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>
							
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-d.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">An Economics Nobel awarded for Examining Reality</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>

							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-a.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">Maybe Supply-Side Economics Deserves a Second Look</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>
							
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="news-details.html"><img alt="" src="{{asset('frontend/assets/image/post-thumb-b.jpg')}}"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Nov 2016 </span>
									</div>
									<h2><a href="news-details.html">An Economics Nobel awarded for Examining Reality</a></h2>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
									<a class="btn btn-alt" href="news-details.html">Read More</a>
								</div>
							</li>
							
						</ul>
						</div>
						<div class="clear"></div>
						<ul class="pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
							</a></li>
						</ul>
						<!-- End Blog Post -->
					</div>
					
					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">
							<div class="wgs-box wgs-search">
								<div class="wgs-content">
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Search...">
										<button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>

							<div class="wgs-box wgs-recents">
								<h3 class="wgs-heading">Recent Posts</h3>
								<div class="wgs-content">
									<ul class="blog-recent">
										<li>
											<a href="news-details.html">
												<img alt=""src="{{asset('frontend/assets/image/post-thumb-a.jpg')}}" >
												<p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
											</a>
										</li>
										<li>
											<a href="news-details.html">
												<img alt="" src="{{asset('frontend/assets/image/post-thumb-b.jpg')}}" >
												<p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
											</a>
										</li>
										<li>
											<a href="news-details.html">
												<img alt="" src="{{asset('frontend/assets/image/post-thumb-c.jpg')}}">
												<p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
											</a>
										</li>
										<li>
											<a href="news-details.html">
												<img alt="" src="{{asset('frontend/assets/image/post-thumb-d.jpg')}}" >
												<p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="wgs-box wgs-tags">
								<h3 class="wgs-heading">Tags</h3>
								<div class="wgs-content">
									<ul class="tag-list clearfix">
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Cargo</a></li>
										<li><a href="#">Delivery</a></li>
										<li><a href="#">Safe</a></li>
										<li><a href="#">Fast</a></li>
										<li><a href="#">sea</a></li>
									</ul>
								</div>
							</div>

							<div class="wgs-box wgs-contact-info">
								<h3 class="wgs-heading">Contact Information</h3>
								<div class="wgs-content boxed">
									<ul class="contact-list">
										<li>
											<i class="fa fa-map" aria-hidden="true"></i>
											<span>1234 Sed ut perspiciatis Road, <br>At vero eos, D58 8975, London.</span>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>(123) 4567 8910</span>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Email : <a href="#">info@sitename.com</a></span>
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