<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
            'bgimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // return $request;

        // $slug = Str::slug($request->name, '-');
        
        if($request->file('bgimage')){
            $file = $request->file('bgimage');
            $bgimage = Storage::disk('public')->putFile('backgroundImage', $file);
        }

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('sliders', $file);
        }

        

        $addslider = new Slider;
        $addslider->bgimage = $bgimage;
        $addslider->image = $image;
        $addslider->description = $request->description;

        // return $addslider;

        $addslider->save();

        return back()->with('success', 'Slider Added Successfully!');
    }

     public function editSlider(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'nullable|string',
        ]);

        // return $request;

        $checkImage = $request->hasFile('image');        
        $checkbgimage = $request->hasFile('bgimage');
        $updateslider = Slider::find($id);
        $img_update = null;

        if($checkImage || $checkbgimage){
            if ($request->hasFile('image') || $request->hasFile('bgimage')) 
            {
            $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'bgimage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $imagePath = public_path('storage/'.$updateslider->image);
            // return $imagePath;
            if(File::exists($imagePath)){
                // unlink($imagePath);
                File::delete($imagePath);
            }

            $bgimagePath = public_path('storage/'.$updateslider->bgimage);
            // return $imagePath;
            if(File::exists($bgimagePath)){
                // unlink($imagePath);
                File::delete($bgimagePath);
            }
            
            $file = $request->file('image');            
            $img_update = Storage::disk('public')->putFile('sliders', $file);

            $file = $request->file('bgimage');            
            $bgimage_update = Storage::disk('public')->putFile('backgroundImage', $file);

            }

        
       
        $updateslider->image = $img_update;
        $updateslider->bgimage = $bgimage_update;
        $updateslider->description = $request->description;
        
        }else{
            $updateslider->description = $request->description;
        }
        // return $updateslider;

        $updateslider->save();

        return back()->with('success', 'Slider Updated Successfully!');
    }

    public function deleteSlider($id)
    {
        // return $id;
        $del_slider = Slider::find($id);
        // $del_slider->deleted = 1;
        $del_slider->delete();
        return back()->with('success', 'Slider Image Deleted succcessfully');
    }
}
