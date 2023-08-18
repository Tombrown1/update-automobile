@php
 $abouts = \App\Models\About::where('deleted', 0)->get(); 
 $services = \App\Models\Service::with('service_category')->where('deleted', 0)->get(); 
 $setting = \App\Models\Setting::find(1);

@endphp
<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Office Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$setting->address}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$setting->phone}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$setting->email}}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 06.00 PM</p>
                    <h6 class="text-light">Saturday:</h6>
                    <p class="mb-0">10.00 AM - 04.00 PM</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    @foreach($services as $service)
                   
                    <a class="btn btn-link" href="{{route('view.services', ['slug' => $service->slug])}}">{{$service->name}}</a>
                   
                    @endforeach
                </div> 
                <!-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Car key Programming</a>
                    <a class="btn btn-link" href="">Car tracking</a>
                    <a class="btn btn-link" href="">Electrical repairs</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Gear box repairs</a>
                    <a class="btn btn-link" href="">General maintenance</a>
                </div>                -->
               
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{url('/')}}">Update Automobile</a>, All Right Reserved.

                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{url('/')}}">Home</a>
                            <!-- <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->