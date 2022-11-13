@extends('layouts.web')
@section('pageTitle', 'Section')
@section('content')

    @section('banner')
        <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">Photo Gallery</h1>
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
					<h2>Gallery F</h2>
					<p>Gallery in grid mode with 4 columns (Zoom Effect)</p>
				</div>
				<!-- Gallery -Photo #D -->
				<div class="gallery gallery-col4 gallery-grids gallery-lightbox hover-zoom">
					<ul class="gallery-list">
						<li>
							<a href="image/gallery/g2-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g2.jpg')}}" alt="@by Author" title="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Photo Title"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g3-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g3.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g4-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g4.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g5-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g5.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g6-lg.jpg" title="Photo Title">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g6.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g7-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g7.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g8-lg.jpg" title="Photo Title">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g8.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
					</ul>
				</div>
				<!-- Gallery #end -->
				
				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Gallery with Caption</h2>
					<p>Gallery in grid mode with 3 columns.</p>
				</div>
				<!-- Gallery -->
				<div class="gallery gallery-col3 gallery-grids gallery-with-caption">

					<ul class="gallery-list">
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g2.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-caption dark">
									<p class="item-cat">Design</p>
									<h4 class="item-title">Miami Vice</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-caption dark">
									<p class="item-cat">Creative</p>
									<h4 class="item-title">Bob and Mou</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="image/gallery/g3.jpg" alt="Name of Photo">
								<div class="gallery-item-caption dark">
									<p class="item-cat">Design, UI/UX</p>
									<h4 class="item-title">Lisa Apps</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="image/gallery/g4.jpg" alt="Name of Photo">
								<div class="gallery-item-caption light">
									<p class="item-cat">UI/UX</p>
									<h4 class="item-title">Studio Value</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="image/gallery/g5.jpg" alt="Name of Photo">
								<div class="gallery-item-caption light">
									<p class="item-cat">Creative</p>
									<h4 class="item-title">Cool Retro</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="image/gallery/g8.jpg" alt="Name of Photo">
								<div class="gallery-item-caption light">
									<p class="item-cat">Design, Creative</p>
									<h4 class="item-title">Art Cube</h4>
								</div>
							</div>
						</li>
					</ul>

				</div>
				<!-- Gallery #end -->
				
				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Gallery with Caption - Link</h2>
					<p>Gallery in grid mode with 3 columns.</p>
				</div>
				<!-- Gallery -->
				<div class="gallery gallery-col3 gallery-grids gallery-with-caption hover-zoom">

					<ul class="gallery-list">
						<li>
							<div class="gallery-item">
								<img src="image/gallery/g2.jpg" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="portfolio-single.html"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g2.jpg')}}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption dark">
									<p class="item-cat">Design</p>
									<h4 class="item-title">Miami Vice</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="portfolio-single.html"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g1-lg.jpg')}}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption dark">
									<p class="item-cat">Creative</p>
									<h4 class="item-title">Bob and Mou</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="portfolio-single.html"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g3-lg.jpg')}}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption dark">
									<p class="item-cat">Design, UI/UX</p>
									<h4 class="item-title">Lisa Apps</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g4.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="portfolio-single.html"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g4-lg.jpg')}}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption light">
									<p class="item-cat">UI/UX</p>
									<h4 class="item-title">Studio Value</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g5.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="#"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g5-lg.jpg')}} title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption light">
									<p class="item-cat">Creative</p>
									<h4 class="item-title">Cool Retro</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="gallery-item">
								<img src="{{asset('frontend/assets/image/gallery/g8.jpg')}}" alt="Name of Photo">
								<div class="gallery-item-link">
									<span class="link-block">
										<a class="link link-more" href="#"><em class="fa fa-link"></em></a>
										<a class="link link-popup image-lightbox" href="{{asset('frontend/assets/image/gallery/g8-lg.jpg')}} title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div>
								<div class="gallery-item-caption light">
									<p class="item-cat">Design, Creative</p>
									<h4 class="item-title">Art Cube</h4>
								</div>
							</div>
						</li>
					</ul>

				</div>
				<!-- Gallery #end -->
				
				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Gallery with Carousel</h2>
					<p>Gallery in grid mode with 4 columns (Zoom Effect). <br>
					 <small>See more option in <a href="shortcode-carousel.html">Carousel Shortcode</a> page.</small></p>
				</div>
				<!-- Gallery -Photo #D -->
				<div class="gallery gallery-col4 gallery-grids gallery-lightbox hover-zoom">
					<ul class="gallery-list has-carousel" data-navs="1">
						<li>
							<a href="image/gallery/g2-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g2.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Photo Title"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g3-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g3.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g4-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g4.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g5-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g5.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g6-lg.jpg" title="Photo Title">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g6.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g7-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g7.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g8-lg.jpg" title="Photo Title">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g8.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
					</ul>
				</div>
				<!-- Gallery #end -->
				
				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Gallery With Filter</h2>
					<p>Gallery in filled mode with 4 columns (Zoom Effect)</p>
				</div>
				<!-- Gallery - Filter Menu -->
				<div class="clear"></div>
				<div class="gallery-category filtered-menu al-center">
                    <ul class="list">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Design</li>
                        <li data-filter="2">Creative</li>
                        <li data-filter="3">UI/UX</li>
                    </ul>
				</div>
				<!-- Gallery Filter -->
				<div class="gallery gallery-col4 gallery-filled gallery-lightbox has-filtered hover-zoom">

					<ul class="gallery-list">
						<li class="filtr-item" data-category="1">
							<a href="image/gallery/g2-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g2.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="2">
							<a href="image/gallery/g1-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g1.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="1, 3">
							<a href="image/gallery/g3-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g3.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="3">
							<a href="image/gallery/g4-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g4.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="2">
							<a href="image/gallery/g5-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g5.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="3">
							<a href="image/gallery/g6-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g6.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>

						<li class="filtr-item" data-category="2, 3">
							<a href="image/gallery/g7-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g7.jpg')}}" alt="Name of Photo"></div>
							</a>
						</li>
						<li class="filtr-item" data-category="1, 2">
							<a href="image/gallery/g8-lg.jpg">
								<div class="gallery-item"><img src="{{asset('frontend/assets/image/gallery/g8.jpg')}}.jpg" alt="Name of Photo"></div>
							</a>
						</li>
					</ul>

				</div>
				<!-- Gallery #end -->
				
				<div class="gaps size-lg"></div>
				<div class="box bg-light pd-x3 round">
					<p class="small"><strong>Hints:</strong> 
					<br>All the gallery support 2 to 5 columns, you need to change class name <code>.gallery-{col2|col3|col4|col5}</code>. 
					<br>Also <code>.hover-{zoom|fade}</code> class for hover effect, <code>.gallery-square</code> for rectangle image edge, <code>.gallery-md</code> for less gap between each image.
					<br>Use <code>.gallery-{grids|filled}</code> class to switch layout of gallery. You can use filter option by adding <code>.has-filtered</code> class.
					<br>For enable lightbox <code>.gallery-lightbox</code> (whole gallery) <code>.image-lightbox</code> (single image, specialy use when you use caption on gallery).
					<br>Use <code>.dark</code> or <code>.light</code> with <code>.gallery-item-caption</code> class for caption light or dark text.
					</p>
				</div>
				
			</div>
		</div>		
	</div>
	<!-- End Section -->


@endsection