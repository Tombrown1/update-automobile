<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PastPresident;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PastPresidentController extends Controller
{
    public function index()
    {
        $past_presidents = PastPresident::where('deleted', 0)->get();
        return view('admin.past_president', compact('past_presidents'));
    }

    public function create_past_president(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'desc' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('PastPresident', $file);
        }

        $slug = Str::slug($request->fname . ''. $request->lname, '-');

        $past_president = new PastPresident;

        $past_president->name = $request->fname .''. $request->lname;
        $past_president->slug = $slug;
        $past_president->image = $image;
        $past_president->description = $request->desc;
        $past_president->start_date = $request->start_date;
        $past_president->end_date = $request->end_date;

        // return $past_president;

        $past_president->save();

        return back()->with('success', 'Past President Added Successfully!');
    }


     public function edit_past_president(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'desc' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
        ]);

        $checkforImageUpdate = $request->hasFile('image');
        $edit_past_president = PastPresident::find($id);
        $slug = Str::slug($request->name, '-');

        if($checkforImageUpdate){
            if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,pdf,png,gif,svg|max:4096',               
            ]);
             $imagePath = public_path('storage/'.$edit_past_president->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('PastPresident', $file);
        }

        $edit_past_president->name = $request->name;
        $edit_past_president->slug = $slug;
        $edit_past_president->image = $image;
        $edit_past_president->description = $request->desc;
        $edit_past_president->start_date = $request->start_date;
        $edit_past_president->end_date = $request->end_date;

        }else{
        $edit_past_president->name = $request->name;
        $edit_past_president->slug = $slug;
        $edit_past_president->description = $request->desc;
        $edit_past_president->start_date = $request->start_date;
        $edit_past_president->end_date = $request->end_date;
        }

        $edit_past_president->save();

        return back()->with('success', 'Past President Added Successfully!');
    }

    public function delete_past_president($id)
    {
        $delete_past_president = PastPresident::find($id);
        $delete_past_president->delete();

        return back()->with('success', 'Past President Record Deleted Successfully!');
    }


}
