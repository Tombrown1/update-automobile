@extends('layouts.web')
@section('pageTitle',  'Technician')
@section('content')

	@section('banner')
		<!-- Page Header Start -->
		<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-1.jpg')}});">
			<div class="container-fluid page-header-inner py-5">
				<div class="container text-center">
					<h1 class="display-3 text-white mb-3 animated slideInDown">Techinician</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center text-uppercase">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
							<li class="breadcrumb-item text-white active" aria-current="page">Technician</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Page Header End -->

	@endsection

         <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/team-1.jpg')}}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">David Ezekiel</h5>
                            <small>MD/CEO</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->
    
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