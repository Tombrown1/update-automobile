<?php

namespace App\Models;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceSectionCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    // public function Service_cat()
    // {
    //     return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    // }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function category()
    {
        return $this->belongsToMany(ServiceCategory::class);
    }
}
