@extends('layouts.web')
@section('pageTitle', 'Contact')
@section('content')

@section('banner')
    <!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					
						<div class="banner-text">
							<h1 class="page-title">Contact Aba Sports Club</h1>
							<p>Would you like to come by and say hi?</p>						
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="active"><span>Contact Us</span></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="{{asset('frontend/assets/image/banner-contact.jpg')}}" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
@endsection

<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
            <div class="md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
			<div class="content row">

				<h2 class="heading-lg">Contact Us</h2>
				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<h3>Get in touch via the contact form</h3>
						<form class="form-quote" action="{{route('send.contact')}}" method="post">
                            @csrf
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="name" type="text" placeholder="Name *" class="form-control required">
									</div>
                                  
									<div class="form-field col-md-6">
										<select name="subject" >
											<option value="">Contact Reason</option>
											<option value="support">Support</option>
											<option value="training">Training</option>
											<option value="feedback">Feedback</option>
											<option value="other">Others</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="email" type="email" placeholder="Email *" class="form-control email required">
									</div>
                                   
									<div class="form-field col-md-6">
										<input name="phone" type="text" placeholder="Phone *" class="form-control required">
									</div>
                                   
								</div>
								
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="message" placeholder="Messages *" class="txtarea form-control required"></textarea>
									</div>
								</div>
								<!-- <input type="text" class="hidden" name="form-anti-honeypot" value=""> -->
								<button type="submit" class="btn">Submit</button>
								<div class="form-results"></div>
							</form>
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						<ul class="contact-list">
							<li><em class="fa fa-map" aria-hidden="true"></em>
								<span>1234 Sed ut perspiciatis Road, <br>At vero eos, D58 8975, London.</span>
							</li>
							<li><em class="fa fa-phone" aria-hidden="true"></em>
								<span>Toll Free : (123) 4567 8910<br>
								Telephone : (123) 1234 5678</span>
							</li>
							<li><em class="fa fa-envelope" aria-hidden="true"></em>
								<span>Email : <a href="#">info@sitename.com</a></span>
							</li>
							<li>
								<em class="fa fa-clock-o" aria-hidden="true"></em><span>Sat - Thu: 8AM - 7PM </span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Map -->
	<div class="map-holder map-contact">
		<!-- <div id="gmap"></div> -->
	</div>
	<!-- End map -->	
	
	<!-- End Section -->
@endsection