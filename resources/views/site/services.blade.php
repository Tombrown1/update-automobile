
@extends('layouts.web')
@section('pageTitle',  'Services')
@section('content')

	@section('banner')
		 <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/assets/img/carousel-bg-2.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

	@endsection

   
    
    </div>
    <!-- Service Start -->
  
    <div class="container-xxl service py-5">
        <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-primary text-uppercase">// Our Services //</h6>
                        <h1 class="mb-5">Explore Our Services</h1>
                    </div>     
     
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4 ">
                        @forelse($services as $key => $service)                   
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{$key === 0 ? 'active'  : ''}}" data-bs-toggle="pill" data-bs-target="#tab-pane-{{$service->id}}" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">{{$service->name}}</h4>
                        </button>                       
                        @empty
                        @endforelse                   
                    </div>
                    
                </div>  
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach($services as $key =>  $service)                 
                        <div class="tab-pane fade show {{$key === 0 ? 'active'  : ''}} {{$service->id ? ''  : 'active'}}" id="tab-pane-{{$service->id}}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                  
                                        <img class="position-absolute img-fluid w-100 h-100 {{$service->id}}" src="{{asset('storage/'.$service->image)}}"
                                            style="object-fit: cover;" alt="">
                                                                                                     
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <h3 class="mb-3 {{ $service->id }}">{{ $service->name }}</h3>
                                    <p class="mb-4 {{ $service->id }}">{{ substr(strip_tags($service->description), 0)}}</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="{{route('view.services', ['slug' => $service->slug])}}" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                       
                      
                        @endforeach
                    </div>                    
                </div>                
            </div>
   
   
        </div>
    </div>
  
    <!-- Service End -->
   
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