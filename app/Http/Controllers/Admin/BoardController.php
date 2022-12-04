<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\BoardCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $boardcats = BoardCategory::where('deleted', 0)->get();
        if(!empty($id)){
            // $boards = Board::where('deleted', 0)->where('board_cat_id', $id)->get();
            $boards = Board::with('board_category')->where('deleted', 0)->where('board_cat_id', $id)->get();            
        }else{
            $boards = Board::where('deleted', 0)->get();
        }

        return view('admin.board', compact('boardcats', 'boards'));
    }
    
    public function board_category()
    {
        $boardcats = BoardCategory::where('deleted', 0)->get();
        // return $boardcats;
        return view('admin.board_category', compact('boardcats'));
    }

    public function create_board(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'post' => 'required|string',
            'cat_id' => 'nullable|integer',
            'description' => 'required|string',
        ]);

        // return $request;
         $image = null;
        if(!is_null($request->file('image'))){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('About', $file);
        }

        $slug = Str::slug($request->name, '-');
        // Add Board
        $board = new Board;
        $board->board_cat_id = $request->cat_id;
        $board->name = $request->name;
        $board->post = $request->post;
        $board->image = $image;
        $board->description = $request->description;
        $board->slug = $slug;
        $board->image = $image;

        // return $board;


        $board->save();
        return back()->with('success', 'Board Created Successfully!');
        
    }

    public function update_board(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'cat_id' => 'nullable|integer',
            'post' => 'required|string',
            'description' => 'required|string',
        ]);
        $checkforImageUpdate = $request->hasFile('image');
        $updateboard = Board::find($id);
        $slug = Str::slug($request->name, '-');

        if($checkforImageUpdate){
            if(!is_null($request->file('image')))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png,gif,pdf,svg|max:4096 '
            ]);
            $imagePath = public_path('storage/'.$updateboard->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('Boards', $file);
        }

        // Add Board
            $updateboard->board_cat_id = $request->cat_id;
            $updateboard->name = $request->name;
            $updateboard->post = $request->post;
            $updateboard->description = $request->description;
            $updateboard->slug = $slug;
            $updateboard->image = $image;

            }else{
            $updateboard->board_cat_id = $request->cat_id;
            $updateboard->name = $request->name;
            $updateboard->post = $request->post;
            $updateboard->description = $request->description;
            $updateboard->slug = $slug;

            }

            $updateboard->save();
            return back()->with('success', 'Board Created Successfully!');
        
    }

    public function deleteBoard($id)
    {
        $deleteBoard = Board::find($id);      
        $deleteBoard->delete();

        return back()->with('success', 'Board Deleted Successfully!');
    }

    public function add_Board_Cat(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $boardCat = new BoardCategory();
        $boardCat->name = $request->name;
        $boardCat->description = $request->description;

        $boardCat->save(); 
        return back()->with('success', 'Board Category Updated Successfully!');
    }

     public function update_Board_Cat(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $updateboardCat = BoardCategory::find($id);
        $updateboardCat->name = $request->name;
        $updateboardCat->description = $request->description;

        $updateboardCat->save(); 
        return back()->with('success', 'Board Category Updated Successfully!');
    }

    public function deleteBoardCat($id)
    {
        $checkIfCatIdExistInBoard = Board::where('board_cat_id', $id)->first();
        if($checkIfCatIdExistInBoard != Null){
            return back()->with('error', 'Board Category Cannot be deleted. it is already in use!');
        }
        $deleteBoardCat = BoardCategory::find($id);
        return $deleteBoardCat;
        $deleteBoardCat->delete();

        return back()->with('success', 'Board Category Deleted Successfully!');
    }

}
