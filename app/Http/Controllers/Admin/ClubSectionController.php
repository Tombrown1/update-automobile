<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClubSection;
use Illuminate\Support\Str;
use App\Models\ClubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClubSectionCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ClubSectionController extends Controller
{
    public function index()
    {
        $clubcategorys = ClubCategory::where('deleted', 0)->get();
        $clubsections = ClubSection::with('club_category')->where('deleted', 0)->get();
        
        // return $clubsections;
        return view('admin.club_section', compact('clubcategorys', 'clubsections'));
    }

    public function club_Section_Category()
    {
        $clubcategorys = ClubCategory::where('deleted', 0)->get();
        return view('admin.club_section_cat', compact('clubcategorys'));
    }

    public function createClubSection(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'club_category_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,jpg,pdf,png,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        if($request->file('image')){
           $file = $request->file('image');
            $file_path = Storage::disk('public')->putFile('Club', $file);
        }

       
        $slug = Str::slug($request->name, '-');

        $addClub = new ClubSection;
        $addClub->club_category_id = $request->club_category_id;
        $addClub->name = $request->name;
        $addClub->file_path = $file_path;
        $addClub->description = $request->description;
        $addClub->slug = $slug;

        $addClub->save();

        // Process Club Section Category
        // $club_section_cat = new ClubSectionCategory;
        // $club_section_cat->club_section_id = $addClub->id;
        // $club_section_cat->club_category_id = $request->club_category_id;
        // $club_section_cat->save();

        return back()->with('success', 'Club Section is successfully created!');

    }

     public function editClubSection(Request $request, $id)
    {
       
        $this->validate($request, [
            'name' => 'required|string',
            'club_category_id' => 'required|integer',
            'description' => 'required|string',
        ]);
        
        $checkforImageUpdate = $request->hasFile('image');
        $editClub = ClubSection::find($id);
        $slug = Str::slug($request->name, '-');
        
        if($checkforImageUpdate){
            if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,pdf,png,gif,svg|max:4096',               
            ]);
            $imagePath = public_path('storage/'.$editClub->file_path);
            // return $imagePath;
            if(File::exists($imagePath)){
                // unlink($imagePath);
                File::delete($imagePath);
            }
           $file = $request->file('image');
           $file_path = Storage::disk('public')->putFile('Club', $file);
        }      

        $editClub->club_category_id = $request->club_category_id;
        $editClub->name = $request->name;
        $editClub->file_path = $file_path;
        $editClub->description = $request->description;
        $editClub->slug = $slug;

        }else{
        $editClub->club_category_id = $request->club_category_id;
        $editClub->name = $request->name;
        $editClub->description = $request->description;
        $editClub->slug = $slug;
        }

        // return $editClub;
        $editClub->save();

        // Process Club Section Category
        // $edit_club_section_cat = ClubSectionCategory::where('club_section_id', $id)->first();
        // $edit_club_section_cat->club_section_id = $editClub->id;
        // $edit_club_section_cat->club_category_id = $request->club_category_id;
        // $edit_club_section_cat->save();

        return back()->with('success', 'Club Section is successfully Updated!');

    }

    public function clubCategory(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required|string', 
            'description' => 'required|string', 
            
        ]);
        $slug = Str::slug($request->name, '-');

        $add_clubCategory = new ClubCategory;
        $add_clubCategory->name = $request->name;
        $add_clubCategory->description = $request->description;
        $add_clubCategory->slug = $slug;

        $add_clubCategory->save();

        return back()->with('success', 'Club Category is successfully created!');

    }

    public function deleteClubCat($id)
    {
        $check_section_cat_id_exist = ClubSection::where('club_category_id', $id)->first();

        if($check_section_cat_id_exist != Null){
           
            return back()->with('error', 'You cannot delete this category, it is already in use!');
        }
            $delete_club_cat = ClubCategory::find($id);
            // return $delete_club_cat;
            // $delete_club_cat->deleted = 1;
            $delete_club_cat->delete();
       

        return back()->with('success', 'Club Category deleted');
    }

    public function deleteClubSection($id)
    {
       $deleteClub = ClubSection::find($id);
    //    $deleteClub->deleted = 1;
       $deleteClub->delete();

       return back()->with('success', 'Club Secttion deleted');
       
    }
}
