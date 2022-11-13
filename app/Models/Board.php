<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function board_category()
    {
        return $this->belongsTo(BoardCategory::class, 'board_cat_id');
    }
}
