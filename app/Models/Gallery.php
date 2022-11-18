<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries_posts';
    protected $primaryKey = 'id';

    // public $timestamps = false;

    public function gallery_cat()
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_cat_id');
    }
}
