<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.themenio.com/finance/solid/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 03:08:04 GMT -->
<head>
	<title>@yield('pageTitle') - Aba Sports Club</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="{{ asset('backend/favicon.ico') }}">
	<!-- <link rel="icon" href="{{asset('frontend/assets/image/favicon.png')}}" type="image/png" sizes="16x16"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendor.bundle.css')}}">
	<!-- <link id="style-css" rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/stylec64e.css?ver=1.1.1')}}"> -->
	<link id="style-css" rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
	<style type="text/css">
		/* Only Demo Purpose */
		.colorPanel {margin: 0px;padding: 5px;position: fixed;z-index: 100;min-width: 20px; border-radius: 0 3px 3px 0; background-color: #3b2d62;top: 35%; text-align: center} .colorPanel ul {margin:0px;padding:0px;list-style: none;display:none} .colorPanel ul li {display: block;margin-top: 10px;} .colorPanel ul a {display: block;margin: 0 auto;width: 20px;height: 20px;border: #fff 1px solid;} .colorPanel a.cart, .colorPanel a.home-solid {border-bottom: 1px solid rgba(255,255,255,.3); margin-bottom: 6px; padding-bottom: 8px;display: block;} .colorPanel a.home-solid i {display: block; margin: 12px auto 4px;} .colorPanel a.home-solid {color: #fff; font-weight: bold; font-size: 9px; text-transform: uppercase} #cpToggle{display:block;height:30px; margin:0 auto; width:28px; line-height:30px; background-size:cover;}.cp-custom{padding: 12px;}.cp-custom #cpToggle{background: none;}.cp-custom i{font-size: 15px;color:#fff;}
	</style>
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-91615293-2', 'auto');
	ga('send', 'pageview');
	</script>
</head>
<body class="site-body style-v1">
	
	@include('includes.header')
	<!-- End Header -->	
	<!-- <br><br><br><br><br>	  -->
	
    @yield('content')

	<!-- Footer Widget-->
    @include('includes.footer')
	<!-- End Footer Widget -->

	<!-- Copyright -->
	<div class="copyright style-v2">
		<div class="container">
			<div class="row">
			
				<div class="row">
					<div class="site-copy col-sm-7">
						<p>&copy; 2022 Aba Sports Club. <a href="#">Policy</a></p>
					</div>
					<div class="site-by col-sm-5 al-right">
					</div>
				</div>
				 				
			</div>
		</div>
	</div>

	<!-- JavaScript Bundle -->
	<script src="{{asset('frontend/assets/js/jquery.bundle.js')}}"></script>
	<!-- Theme Script init() -->
	<script src="{{asset('frontend/assets/js/script.js')}}"></script>
	<!-- End script -->
	<!-- End Copyright -->
	
	<!-- Rreload Image for Slider -->
	<div class="preload hide">
		<img alt="" src="{{asset('frontend/assets/image/slider-lg-a.jpg')}}">
		<img alt="" src="{{asset('frontend/assets/image/slider-lg-b.jpg')}}">
	</div>
	<!-- End -->

	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="{{asset('frontend/assets/js/jquery.bundle.js')}}"></script>

</body>

<!-- Mirrored from demo.themenio.com/finance/solid/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 03:08:04 GMT -->
</html>