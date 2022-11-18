<?php

namespace App\Models;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_cat_id');
    }

}
