<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\GalleryPost;
use App\Models\GalleryPostCategory;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = GalleryPost::where('deleted', 0)->get();
        $gallery_cats = GalleryCategory::where('deleted', 0)->get();
        return view('admin.gallery', compact('gallerys', 'gallery_cats'));
    }

    public function galleryCat()
    {   
        $gallery_categorys = GalleryCategory::where('deleted', 0)->get();    
        return view('admin.gallerycat', compact('gallery_categorys'));
    }

    public function createGallery(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'description' => 'required|string',
            'gallery_cat_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // return $request;

        $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('gallery', $file);
        } 

        $addGallery = new GalleryPost;
        $addGallery->gallery_cat_id = $request->gallery_cat_id;
        $addGallery->name = $request->name;
        $addGallery->file_path = $image;
        $addGallery->description = $request->description;
        $addGallery->slug = $slug;

        $addGallery->save();

        // This code block adds gallery_post id and gallery_category id to a table called gallery_post_category table
        // $gallery_post_cat = new GalleryPostCategory;
        // $gallery_post_cat->gallery_post_id = $addGallery->id;
        // $gallery_post_cat->gallery_category_id = $request->gallery_cat_id;
        
        // $gallery_post_cat->save();

        return back()->with('success', 'Image Added Successfully!');
    }

    public function updateGallery(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'description' => 'required|string',
            'gallery_cat_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // return $request;

        $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('gallery', $file);
        } 

        $updateGallery = GalleryPost::find($id);
        $updateGallery->gallery_cat_id = $request->gallery_cat_id;
        $updateGallery->name = $request->name;
        $updateGallery->file_path = $image;
        $updateGallery->description = $request->description;
        $updateGallery->slug = $slug;

        $updateGallery->save();

        return back()->with('success', 'Image Updated Successfully!');

    }

    public function deleteGallery($id)
    {
        $del_image = GalleryPost::find($id);
        $del_image->deleted = 1;

        $del_image->save();
        return back()->with('success', 'Gallery Image Deleted succcessfully');
    }

    public function createGalleryCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $slug = Str::slug($request->name, '-');

        $create_gallery_category = new GalleryCategory;
        $create_gallery_category->name = $request->name;
        $create_gallery_category->description = $request->description;
        $create_gallery_category->slug = $slug;

        $create_gallery_category->save();

        return back()->with('success', 'Gallery Category Created Successfully!');
    }

    public function destroyGalleryCat($id)
    {
        $del_Gallery_Cat = GalleryCategory::find($id);
        $del_Gallery_Cat->deleted = 1;

        $del_Gallery_Cat->save();
        return back()->with('success', 'Gallery Category Deleted Successfully!');
    }
}
