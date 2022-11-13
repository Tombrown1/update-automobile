<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public function about_category()
    {
        return $this->belongsTo(AboutCategory::class, 'about_cat_id');
    }
}
