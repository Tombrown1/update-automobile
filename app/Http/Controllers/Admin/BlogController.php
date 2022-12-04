<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    public function index()
    {
        // $blogposts = BlogPost::where('deleted', 0)->orderBy('id', 'DESC')->paginate(10);
        $blogposts = BlogPost::with('blog_category')->where('deleted', 0)->orderBy('id', 'DESC')->paginate(10);
        // return $blogposts;
        return view('admin.blog', compact('blogposts'));
    }

    public function blogcategory()
    {
        $blogcategorys = BlogCategory::where('deleted', 0)->get();
        return view('admin.blogcategory', compact('blogcategorys'));
    }

    public function createpost()
    {
        $blogcategorys = BlogCategory::where('deleted', 0)->get();
       return view('admin.createpost', compact('blogcategorys'));
    }

    public function addblogpost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'blog_cat_id' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // return $request;

        if($request->file('image')){
            $file = $request->file('image');
            $featured_image = Storage::disk('public')->putFile('blog', $file);
        }

        $slug = Str::slug($request->title, '-');
        $author = Auth::id();

        $addpost = new BlogPost;
        $addpost->blog_cat_id = $request->blog_cat_id;
        $addpost->title = $request->title;
        $addpost->author = $author;
        $addpost->slug = $slug;
        $addpost->featured_image = $featured_image;
        $addpost->description = $request->description;

        // return $addpost;
        $addpost->save();

        // This code block adds blog_post id and blog_category_id to a table called blog_post_category table
        // $blog_post_cat = new BlogPostCategory;
        // $blog_post_cat->blog_cat_id = $request->blog_cat_id;
        // $blog_post_cat->blog_post_id = $addpost->id;

        // $blog_post_cat->save();

        //  $url = url('http://127.0.0.1:8000/admin/blog');
         $url = url('admin/blog');
        return redirect($url)->with('success', 'Blog Post is created successfully!');
    }

    public function editblogpost($id)
    {
        $blogcategorys = BlogCategory::where('deleted', 0)->get(); 
        $blogpost = BlogPost::find($id);
        return view('admin.editblogpost', compact('blogpost', 'blogcategorys'));
    }
    
    
    public function updateblogpost(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'blog_cat_id' => 'required|integer',
            'description' => 'required|string',
            

        ]);

        $check_blog_Img = $request->hasFile('image');
        $updateblogpost = BlogPost::find($id);
        $img_update = null; 
        
        $slug = Str::slug($request->title, '-');
        $author = Auth::id();

        // return $request;

        if($check_blog_Img){
            if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
           $image_Path = public_path('storage/'.$updateblogpost->featured_image);
           if(FIle::exists($image_Path)){
            File::delete($image_Path);
           }
            $file = $request->file('image');
            $featured_image = Storage::disk('public')->putFile('blog', $file);
        }       

        $updateblogpost->blog_cat_id = $request->blog_cat_id;
        $updateblogpost->title = $request->title;
        $updateblogpost->author = $author;
        $updateblogpost->slug = $slug;
        $updateblogpost->featured_image = $featured_image;
        $updateblogpost->description = $request->description;

        }else{
        $updateblogpost->blog_cat_id = $request->blog_cat_id;
        $updateblogpost->title = $request->title;
        $updateblogpost->author = $author;
        $updateblogpost->slug = $slug;
        // $updateblogpost->featured_image = $featured_image;
        $updateblogpost->description = $request->description;
        }

        $updateblogpost->save();

        // This code block adds blog_post id and blog_category_id to a table called blog_post_category table
        // $update_blog_post_cat = BlogPostCategory::where('blog_cat_id', $request->blog_cat_id )->first();
        // $update_blog_post_cat->blog_cat_id = $request->blog_cat_id;
        // $update_blog_post_cat->blog_post_id = $updateblogpost->id;
        // $update_blog_post_cat->save();

        $url = url('admin/blog');
        return redirect($url)->with('success', 'Blog Post is created successfully!');
    }

    public function addBlogCat(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',            
        ]);

        $slug = Str::slug($request->title, '-');

        $addBlogCat = new BlogCategory;
        $addBlogCat->title = $request->title;
        $addBlogCat->title = $request->description;
        $addBlogCat->title = $slug;

        $addBlogCat->save();

        $url = url('http://127.0.0.1:8000/admin/blog');
        return redirect($url)->with('success', 'Blog Category Added Successfully!');
    }

    public function deleteBlog($id)
    {
        $delBlog = BlogPost::find($id);
        // $delBlog->deleted = 1;
        $delBlog->delete();

        return back()->with('success', 'Blog Category Deleted Successfully!');
    }
    
    public function deleteBlogCat($id)
    {
        $delBlogCat = BlogCategory::find($id);
        // $delBlogCat->deleted = 1;
        $delBlogCat->delete();

        return back()->with('success', 'Blog Category Deleted Successfully!');
    }
}
