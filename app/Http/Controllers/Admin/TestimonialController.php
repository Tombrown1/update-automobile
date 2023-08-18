<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::where('deleted', 0)->get();
        return view('admin.testimonial', compact('testimonials'));
    }

    public function add_testimonial()
    {
        return view('admin.add_testimonial');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'specialization' => 'string|required',
            'description' => 'string|required'
        ]);

        // return $request;

        if($request->file('image')){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('testimonial', $file);
        }

        $splitname = explode(" ", $request->name, 2); // Restrict it to two values for name like Emmanuel Sunday Etim
        $fname = $splitname[0];
        $lname = !empty($splitname[1]) ? $splitname[1] : '' ; // If the last name doesn't exist, make it empty.

        $testimonial = new Testimonial;
        $testimonial->fname = $fname;
        $testimonial->lname = $lname;
        $testimonial->specialization = $request->specialization;
        $testimonial->description = $request->description;
        $testimonial->image = $image;

        $testimonial->save();

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial added successfully!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::where('deleted', 0)->find($id);
        return view('admin.edit_testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'name' => 'string|required',
            'specialization' => 'string|required',
            'description' => 'string|required',
       ]);

    //    return $request;
       $UpdateTestimonial = Testimonial::find($id);
       $ChkIfTestiImgExist = Testimonial::where('deleted', 0)->find($id);

       if($request->hasfile('image')){
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4096'
        ]);
        $imgPathExist = public_path('storage/'.$ChkIfTestiImgExist->image);
        if(File::exists($imgPathExist)){
            // Unlink ImgPathExist
            File::delete($imgPathExist);
        }

        $file = $request->file('image');
        $image = Storage::disk('public')->putFile('testimonial', $file);
        $UpdateTestimonial->image = $image;
        $UpdateTestimonial->save();
       }

       $splitfullname = explode(" ", $request->name, 2);
       $fname = $splitfullname[0];
       $lname = !empty($splitfullname[1]) ? $splitfullname[1] : " ";


       $UpdateTestimonial->fname = $fname;
       $UpdateTestimonial->lname = $lname;
       $UpdateTestimonial->specialization = $request->specialization;
       $UpdateTestimonial->description = $request->description;

       $UpdateTestimonial->save();
       return redirect()->route('admin.testimonial')->with('success', 'Testimonial is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delTestimonial = Testimonial::where('deleted', 0)->find($id);
        $imgPathExist = public_path('storage/'.$delTestimonial->image);
        if(File::exists($imgPathExist)){
            file::delete($imgPathExist);
        }
        $delTestimonial->delete();

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial is successfully deleted!');
    }
}
