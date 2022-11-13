<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPostCategory extends Model
{
    use HasFactory;
    protected $table = 'galleries_post_categories';

    public $timestamps = false;

}
