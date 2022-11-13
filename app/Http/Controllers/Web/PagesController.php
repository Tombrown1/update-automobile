<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Upload;
use App\Models\Service;
use App\Models\ClubSection;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class PagesController extends Controller
{
    public function index()
    {  
        $sliders = Slider::where('deleted', 0)->get();
        return view('site.index', compact('sliders'));
    }

    public function about()
    {  

        return view('site.about');
    }

     public function aboutview($slug)
    {
        $about = About::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.aboutview', compact('about'));
    }

    public function services()
    {
        return view('site.services');
    }

    public function viewServices($slug)
    {
        $service = Service::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.serviceview', compact('service'));
    }

    public function news_event()
    {
        return view('site.news_events');
    }

    public function view_news_event($slug)
    {
        $blogs = Blog::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.view_news_events', compact('blogs'));
    }

    public function section()
    {
        return view('site.section');
    }

     public function sectionview($slug)
    {
        $sections = ClubSection::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.sectionview');
    }

    public function gallery()
    {
        return view('site.gallery');
    }
}

