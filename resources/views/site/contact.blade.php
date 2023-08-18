@extends('layouts.web')
@section('pageTitle', 'Contact')
@section('content')

@section('banner')
   <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
		
		<!-- #end Banner/Static -->
@endsection

<!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Get In Touch With Us Today</h1>
            </div>
            <div class="row g-4">
    
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">                            
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>book@updateautomobile.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// General //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@updateautomobile.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technical //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tech@updateautomobile.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">Get In Touch With Us Today</p>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                            <strong>Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <form action="{{route('send.contact')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone Number">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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




    