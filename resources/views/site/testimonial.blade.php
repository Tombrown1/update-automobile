@extends('layouts.web')
@section('pageTitle',  'testimonial')
@section('content')

	@section('banner')
		<!-- Page Header Start -->
		<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-1.jpg')}});">
			<div class="container-fluid page-header-inner py-5">
				<div class="container text-center">
					<h1 class="display-3 text-white mb-3 animated slideInDown">testimonial</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center text-uppercase">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
							<li class="breadcrumb-item text-white active" aria-current="page">testimonial</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Page Header End -->

          <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('storage/'.$testimonial->image)}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">{{$testimonial->fname}} {{$testimonial->fname}}</h5>
                    <p>{{$testimonial->specialization}}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">{{substr(strip_tags($testimonial->description), 60)}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
	@endsection

   <!-- Modal begins here -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Service Request Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{route('booking.service')}}" method="post">
                    @csrf
                    <div class="col-md-6 mb-1">
                        <label for="customer-name" class="col-form-label">Customer Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="customer-email" class="col-form-label">Customer Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="customer-phone" class="col-form-label">Customer Phone:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="customer-city" class="col-form-label">Customer city:</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="col-md-12 mb-1">
                        <label for="customer-address" class="col-form-label">Customer Address:</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                        <h6 class="card-title">Please select the various services you want us to response to.</h3>
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Car Tracking
                        </label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" value="Engine Servicing" id="engine_servicing" name="services[]">
                        <label class="form-check-label" for="engine_servicing">
                            Engine Servicing
                        </label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="Car Key Programming" id="key_programming">
                        <label class="form-check-label" for="key_programming">
                            Car Key Programming
                        </label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="Diagnostic Test" id="diagnostic_test">
                        <label class="form-check-label" for="diagnostic_test">
                            Diagnostic Test
                        </label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="Electrical Service" id="electrical_services">
                        <label class="form-check-label" for="electrical_services">
                            Electrical Service
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="description" name="message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
   

  



@endsection