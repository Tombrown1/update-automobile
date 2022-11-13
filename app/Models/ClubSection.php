<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubSection extends Model
{
    use HasFactory;

    public function club_category()
    {
        return $this->belongsTo(ClubCategory::class, 'club_category_id');
    }
}
