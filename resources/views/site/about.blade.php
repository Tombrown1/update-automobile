@extends('layouts.web')
@section('pageTitle',  $about->name)
@section('content')

	@section('banner')
		<!-- Page Header Start -->
		<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-1.jpg')}});">
			<div class="container-fluid page-header-inner py-5">
				<div class="container text-center">
					<h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center text-uppercase">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
							<li class="breadcrumb-item text-white active" aria-current="page">About</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Page Header End -->

	@endsection

	<!-- About us Start -->
		<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>At Update Automobile, we are dedicated to providing top-quality servicing for all types of vehicles. We understand that your vehicle is an essential part of your life, and we're committed to keeping it running smoothly and safely with our expert servicing.</p>
                            <a class="text-secondary border-bottom" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Workers</h5>
                            <p>Our team of experienced technicians is trained to provide comprehensive servicing for all types of vehicles, from cars to trucks and more. We use state-of-the-art tools and equipment to diagnose and repair issues quickly and efficiently, saving you time and money.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>The use of modern servicing equipment is essential to provide efficient and high-quality service to our customers. With the help of advanced technology and machinery, we can diagnose and repair vehicles quickly and accurately, which has ultimately lead to customer satisfaction and loyalty</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
	<div class="container-xxl">
        <div class="container text-align-center">
                    <h6 class="text-primary text-uppercase">// About Update Automobile //</h6>

        <p class="mb-4">
           
          {!! nl2br($about->about) !!}
        </p>
        
        
    </div>
    <!-- About us End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('frontend/assets/img/about.jpg')}}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4"><span class="text-primary">Update Automobile</span> Is Your Auto Care <span class="text-primary">Sure Plug</span></h1>
                    <p class="mb-4">At Update Automobile, we are passionate about providing high-quality electrical repair and maintenance services for all types of vehicles. we believe that cars are more than just machines - they're a crucial part of our daily lives.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>VISION</h6>
                                    <span>{{$about->vision}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>MISSION</h6>
                                    <span>{{$about->mission}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>CORE VALUES</h6>
                                    <span>{{$about->core_value}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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