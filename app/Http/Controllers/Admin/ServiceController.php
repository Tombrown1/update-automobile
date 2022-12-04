<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSectionCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('service_category')->where('deleted', 0)->orderBy('id','DESC')->get();
        // return $services;
        return view('admin.services', compact('services'));
    }
    public function add_service()
    {
        $service_categorys = ServiceCategory::where('deleted', 0)->get();
        
        return view('admin.add_service', compact('service_categorys'));
    }
    public function service_category()
    {
        $service_categorys = ServiceCategory::where('deleted', 0)->orderBy('id', 'DESC')->get();
        // return $service_categorys;
        return view('admin.service_category', compact('service_categorys'));
    }


      public function create_service(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'service_cat_id' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg, jpg, png, gif, svg, pdf|max:2048',
        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('Services', $file);
        }

        $slug = Str::slug($request->name, '-');

        $create_service = new Service;
        $create_service->service_cat_id = $request->service_cat_id;
        $create_service->name = $request->name;
        $create_service->description = $request->description;
        $create_service->image = $image;
        $create_service->slug = $slug;

        $create_service->save();

        // Process the Service Section Category Table;
        // $add_to_service_sect_cat = new ServiceSectionCategory;
        // $add_to_service_sect_cat->service_id = $create_service->id;
        // $add_to_service_sect_cat->service_category_id = $request->service_cat_id;
        // $add_to_service_sect_cat->save();

        $url = url('admin/all-services');
        return redirect($url)->with('success', 'Service Section created successfully');
    }

    public function edit_service($id)
    {   
        $services = Service::find($id);
        $service_categorys = ServiceCategory::where('deleted', 0)->get();
       return view('admin.edit_service', compact('service_categorys', 'services')); 
    }


    public function update_service(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'service_cat_id' => 'required|integer',
            'description' => 'required|string',
        ]);

        $checkforUpdatedImage = $request->hasFile('image');
        $update_service = Service::find($id);
        $slug = Str::slug($request->name, '-');
        
        if($checkforUpdatedImage){
            if($request->file('image')){
            $request->validate([
            'image' => 'required|image|mimes:jpeg, jpg, png, gif, svg, pdf|max:2048',
            ]);
            $image_Path = public_path('storage/'.$update_service->image);
            if(File::exists($image_Path)){
                File::delete($image_Path);
            }
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('Services', $file);
        }

        $update_service->service_cat_id = $request->service_cat_id;
        $update_service->name = $request->name;
        $update_service->description = $request->description;
        $update_service->image = $image;
        $update_service->slug = $slug;

        }else{
        $update_service->service_cat_id = $request->service_cat_id;
        $update_service->name = $request->name;
        $update_service->description = $request->description;
        $update_service->slug = $slug;
        }
        
        // return $update_service;
        
        $update_service->save();

        // Process the Service Section Category Table;
        // $update_service_sect_cat = ServiceSectionCategory::where('service_category_id', $request->service_cat_id)->first();
       
        // $update_service_sect_cat->service_id = $update_service->id;
        // $update_service_sect_cat->service_category_id = $request->service_cat_id;
        // $update_service_sect_cat->save();

        $url = url('admin/all-services');
        return redirect($url)->with('success', 'Service Section updated successfully');
    }  

    public function create_service_category(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $slug = Str::slug($request->name, '-');

        $addservice_category = new ServiceCategory;

        $addservice_category->name = $request->name;
        $addservice_category->description = $request->description;
        $addservice_category->slug = $slug;

        $addservice_category->save();
        return back()->with('success', 'Service Section Created Successfully!');
        
    }    

    public function deleteService($id)
    {
        $deleteService = Service::find($id);
        $deleteService->delete();

        return back()->with('success', 'Services deleted successfully!');
    }

    public function deleteServiceCategory($id)
    {
        $checkIfCatExistInService = Service::where('service_cat_id', $id)->first();
        if($checkIfCatExistInService != Null){

            return back()->with('error', 'Service Category is already in used and cannot be deleted!');
        }
        $deleteServiceCategory = ServiceCategory::find($id);

        // return $deleteServiceCategory;
        $deleteServiceCategory->delete();

        return back()->with('success', 'Service Category deleted successfully!');
    }
}
