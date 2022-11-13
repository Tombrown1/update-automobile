<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSectionCategory extends Model
{
    use HasFactory;

   public $timestamps = false;

   public function aboutCategory()
   {
    return $this->belongsTo(AboutCategory::class, 'about_cat_id');
   }

   public function about()
   {
    return $this->belongsTo(About::class, 'about_id');
   }
}
