	<!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider slider-large carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			@foreach($sliders as $slider)
			<div class="carousel-inner">
				<div class="item active" >
					<!-- Set the first background image using inline CSS below. -->
					<!-- <div class="fill" style="background-image:url('frontend/assets/image/slider-lg-a.jpg');"> -->
					<div class="fill" style="background-image:url({{asset('storage/'.$slider)}});">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<h2>Fit your life and budget<strong>.</strong></h2>
										<p>We provide independent advice based on established research methods, and our experts have in-depth sector knowledge.</p>
										<a href="#" class="btn">Learn more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
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
			@endforeach
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