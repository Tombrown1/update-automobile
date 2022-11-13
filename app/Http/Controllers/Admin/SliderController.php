<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
     public function index()
    {
        $sliders = Slider::where('deleted', 0)->get();
        return view('admin.slider', compact('sliders'));
    }

    public function createSlider(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // return $request;

        // $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('sliders', $file);
        } 

        $addslider = new Slider;
        $addslider->image = $image;
        $addslider->description = $request->description;

        // return $addslider;

        $addslider->save();

        return back()->with('success', 'Slider Added Successfully!');
    }

    public function deleteSlider($id)
    {
        // return $id;
        $del_slider = Slider::find($id);
        $del_slider->deleted = 1;
        $del_slider->save();
        return back()->with('success', 'Slider Image Deleted succcessfully');
    }
}
