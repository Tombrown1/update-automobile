@extends('layouts.web')
@section('pageTitle',  'Booking')
@section('content')

	@section('banner')
		<!-- Page Header Start -->
		<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-1.jpg')}});">
			<div class="container-fluid page-header-inner py-5">
				<div class="container text-center">
					<h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center text-uppercase">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
							<li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Page Header End -->

	@endsection

        <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Workers</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Update Automobile Is The Best and Your Sure Plug Auto Care Service Provider</h1>
                        <p class="text-white mb-0">We pride ourselves on providing exceptional customer service and building long-term relationships with our clients. We believe that honesty and transparency are the keys to a successful business, which is why we always provide clear and straightforward communication about our services and pricing.</p>
                        <p class="text-white mb-0">We're dedicated to providing the best service possible, and we look forward to working with you. Contact us today to schedule an appointment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Quick Response //</h6>
                    <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                    <p class="mb-0">We're here to help. Send us an email or call us at {{$setting->phone}} . Please feel free to contact our expert.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+234 703 283 0713</h3>
                        <a href="" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
    
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