<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Upload;
use App\Models\Service;
use App\Models\Setting;
use App\Models\BlogPost;
use App\Models\ClubSection;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use App\Models\ClubCategory;
use App\Models\Gallery;
use App\Models\PastPresident;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    public function index()
    {  
        $sectioncats = ClubSection::with('club_category')->where('deleted', 0)->inRandomOrder()->limit(4)->get();
        $blog_posts = BlogPost::with('blog_category')->where('deleted', 0)->inRandomOrder()->limit(3)->get();        
        $about = Setting::where('deleted', 0)->find(1);
        $abouts = About::where('deleted', 0)->find(2);
        $testimonials = Testimonial::where('deleted', 0)->get();
        $services = Service::with('service_category')->where('deleted', 0)->get();

        // return $about;
        $sliders = Slider::where('deleted', 0)->get();
        return view('site.index', compact('sliders', 'about', 'abouts', 'blog_posts', 'sectioncats', 'testimonials', 'services'));
    }

    public function about()
    {  
        $about = Setting::where('deleted', 0)->find(1);
        $sectioncats = ClubSection::with('club_category')->where('deleted', 0)->inRandomOrder()->limit(7)->get();

        // return $about;
        return view('site.about', compact('about', 'sectioncats'));
    }

     public function aboutview($slug)
    {
        $about = About::where('deleted', 0)->where('slug', $slug)->first();
        $sectioncats = ClubSection::with('club_category')->where('deleted', 0)->inRandomOrder()->limit(7)->get();
        return view('site.aboutview', compact('about', 'sectioncats'));
    }

    public function services()
    {
        $services = Service::with('service_category')->where('deleted', 0)->get();
        // return $services;
        
         return view('site.services', compact('services'));
    }

    public function viewServices($slug)
    {
        $service = Service::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.serviceview', compact('service'));
    }

   

    public function news_event()
    {
        $about = Setting::where('deleted', 0)->find(1);
        $blogs = BlogPost::with('blog_category')->where('deleted', 0)->inRandomOrder()->limit(5)->get();
        return view('site.news_events', compact('blogs', 'about'));
    }

    public function view_news_event($slug)
    {
        $setting = Setting::where('deleted', 0)->find(1);
        $blogs = BlogPost::with('blog_category')->where('deleted', 0)->inRandomOrder()->limit(5)->get();
        $blogview = BlogPost::with('blog_category')->where('deleted', 0)->where('slug', $slug)->first();
        return view('site.view_news_event', compact('blogview', 'blogs', 'setting'));
    }

    public function section()
    {
        $clubsections = ClubSection::with('club_category')->where('deleted', 0)->get();
        return view('site.section', compact('clubsections'));
    }

     public function sectionview($slug)
    {
        $setting = Setting::where('deleted', 0)->find(1);
        $blogs = BlogPost::with('blog_category')->where('deleted', 0)->inRandomOrder()->limit(5)->get();
        $section = ClubSection::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.sectionview', compact('section', 'setting', 'blogs' ));
    }

    public function gallery()
    {
        $gallerys = Gallery::with('gallery_cat')->where('deleted', 0)->get();
        // return $gallerys;
        return view('site.gallery', compact('gallerys'));
    }


     public function galleryview($slug)
    {
        $setting = Setting::where('deleted', 0)->find(1);
        $blogs = BlogPost::where('deleted', 0)->inRandomOrder()->limit(5)->get();
        $gallery = Gallery::with('gallery_cat')->where('deleted', 0)->where('slug', $slug)->first();
        // return $gallery;
        return view('site.gallery_view', compact('gallery', 'blogs', 'setting'));
    }

    public function past_president()
    {       
        $sectioncats = ClubSection::with('club_category')->where('deleted', 0)->inRandomOrder()->limit(7)->get();
        $past_presidents = PastPresident::where('deleted', 0)->inRandomOrder()->paginate(10);
        return view('site.pst_president', compact('past_presidents', 'sectioncats'));
    }

    public function view_past_president($slug)
    {
        $setting = Setting::where('deleted', 0)->find(1);
        $blogs = BlogPost::where('deleted', 0)->inRandomOrder()->limit(5)->get();
        $about = About::where('deleted', 0)->where('slug', $slug)->first();
        $sectioncats = ClubSection::with('club_category')->where('deleted', 0)->inRandomOrder()->limit(7)->get();
        $past_president = PastPresident::where('deleted', 0)->where('slug', $slug)->first();
        return view('site.view_pst_president', compact('past_president', 'about', 'sectioncats', 'setting', 'blogs'));
    }

    public function booking()
    {  
        $setting = Setting::where('deleted', 0)->find(1);
        return view('site.booking', compact('setting'));
    }

    public function technician()
    {       
        return view('site.technician');
    }

    public function testimonial()
    {
        $testimonials = Testimonial::where('deleted', 0)->get();
        return view('site.testimonial', compact('testimonials'));
    }
   
}

