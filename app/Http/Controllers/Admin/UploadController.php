<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::where('deleted', 0)->get();
        return view('admin.uploads', compact('uploads'));
    }

    public function create_file(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        if($request->file('file')){
            $file = $request->file('file');
            $file_path = Storage::disk('public')->putFile('Uploads', $file);
        }

        $slug = Str::slug($request->name, '-');

        $uploads = new Upload;
        $uploads->title = $request->name;
        $uploads->file_path = $file_path;
        $uploads->description = $request->description;
        $uploads->slug = $slug;

        $uploads->save();
        return back()->with('success', 'File Upload Created successfully');
    }


    public function update_file(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        if($request->file('file')){
            $file = $request->file('file');
            $file_path = Storage::disk('public')->putFile('Uploads', $file);
        }

        $slug = Str::slug($request->name, '-');

        $update_uploads = Upload::find($id);
        $update_uploads->title = $request->name;
        $update_uploads->file_path = $file_path;
        $update_uploads->description = $request->description;
        $update_uploads->slug = $slug;

        $update_uploads->save();
        return back()->with('success', 'File Upload Updated successfully');
    }

    public function deleteUpload($id)
    {
        $deleteUpload = Upload::find($id);
        $deleteUpload->delete();

        return back()->with('success', 'File Upload deleted successfully');
    }


}
