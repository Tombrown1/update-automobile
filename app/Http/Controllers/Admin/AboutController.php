<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutCategory;
use App\Models\AboutSectionCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use function PHPUnit\Framework\returnSelf;

class AboutController extends Controller
{
    public function index()
    {
        // $about_sections = About::where('deleted', 0)->orderBy('id', 'DESC')->get();
        $about_sections = About::with('about_category')->where('deleted', 0)->orderBy('id', 'DESC')->get();
        // return $about_sections;
        return view('admin.about_us', compact('about_sections'));
    }
    
    public function add_about()
    {
        $about_categorys = AboutCategory::where('deleted', 0)->get();
        return view('admin.add_about', compact('about_categorys'));
    }

    public function about_category()
    {
        $about_categorys = AboutCategory::where('deleted', 0)->get();
        return view('admin.about_category', compact('about_categorys'));
    }

    public function create_about(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'about_cat_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg, jpg, png, gif, svg, pdf|max:2048',
        ]);
        $image = null;
        if(!is_null($request->file('image' == null))){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('About', $file);
        }
        $slug = Str::slug($request->name, '-');

        $create_about = new About;
        $create_about->about_cat_id = $request->about_cat_id;
        $create_about->name = $request->name;
        $create_about->description = $request->description;
        $create_about->image = $image;
        $create_about->slug = $slug;
        return $create_about;

        $create_about->save();

        // $add_about_sect_cat = new AboutSectionCategory;
        // $add_about_sect_cat->about_id = $create_about->id;
        // $add_about_sect_cat->about_cat_id = $request->about_cat_id;

        // $add_about_sect_cat->save();

        $url = url('admin/about-us');
        
        return redirect($url)->with('success', 'About Section Created Successfully!');
    }

    public function edit_about($id)
    {
        $about_categorys = AboutCategory::where('deleted', 0)->get();
        $about = About::where('deleted', 0)->find($id);
        return view('admin.edit_about_us', compact('about', 'about_categorys'));
    }

    public function update_about(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'about_cat_id' => 'required|integer',
        ]);
        
        // @Tomc963
        $checkforUpdateImage = $request->hasFile('image');
        $update_about = About::find($id);
        $image_update = null;
        $slug = Str::slug($request->name, '-');
        
        
        if($checkforUpdateImage){
             if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg, jpg, png, gif, svg, pdf|max:2048',
            ]);
            $image_Path = public_path('storage/'.$update_about->image);
            if(File::exists($image_Path)){
                File::delete($image_Path);
            }
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('About', $file);
        }

        $update_about->name = $request->name;
        $update_about->description = $request->description;
        $update_about->image = $image;
        $update_about->slug = $slug;
        
        }else{
        $update_about->name = $request->name;
        $update_about->description = $request->description;
        $update_about->slug = $slug;
        }
        // return $update_about;
        $update_about->save();

        $update_about_sect_cat = AboutSectionCategory::where('about_cat_id', $request->about_cat_id)->first();
        $update_about_sect_cat->about_id = $update_about->id;
        $update_about_sect_cat->about_cat_id = $request->about_cat_id;

        $update_about_sect_cat->save();

        $url = url('admin/about-us');
        
        return redirect($url)->with('success', 'About Section Created Successfully!');
    }

    

    public function create_about_category(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $slug = Str::slug($request->name, '-');

        $add_about_category = new AboutCategory;
        $add_about_category->name = $request->name;
        $add_about_category->description = $request->description;
        $add_about_category->slug = $slug;

        $add_about_category->save();  
              
        return back()->with('success', 'About Category Added Successfully!');
    }

    public function delete_about($id)
    {
        $del_about = About::find($id);
        $del_about->delete();

        return back()->with('success', 'About Section Deleted Successfully!');
    }

   

    public function delete_about_category($id)
    {
        $checkIf_about_Cat_Id_exist_in_About = About::where('about_cat_id', $id)->first();
        if($checkIf_about_Cat_Id_exist_in_About != Null){
            return back()->with('error', 'About Category cannot be deleted, it is aleady in use!');
        }
       $del_about_cat = AboutCategory::find($id);
    //    return $del_about_cat;
       $del_about_cat->delete();

        return back()->with('success', 'About Category Deleted Successfully!');

    } 

    
    // There are some useful logic and query in the below commented function, kindly ignore if it doesn't relate to what you are working on at the moment.
    
    // public function delete_about_section($id)
    // {
    //     $checkIf_about_Cat_Sec_Id_exist = AboutSectionCategory::where('about_id', $id)->first();

    //     $checkIf_about_Id_exist = About::where('deleted', 0)->where('id', $id)->first();

    //      if(is_null($checkIf_about_Cat_Sec_Id_exist)){
    //         return back()->with('message', 'About Section Category Does not Exist!');
    //     }

    //     if(is_null($checkIf_about_Id_exist)){
    //         return back()->with('message', 'About Section Does not Exist!');
    //     }



    //     $del_about_section = About::find($id);
        
    //     $del_about_section->delete();

    //     $delete_abt_sect_cat = AboutSectionCategory::where('about_id', $id)->first();
    //     $delete_abt_sect_cat->delete();

    //     return back()->with('success', 'About Section Deleted Successfully!');
    // }

}
