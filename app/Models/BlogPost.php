<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_cat_id');
    }

}
