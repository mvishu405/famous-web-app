<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function workCategory()
    {
        return $this->belongsTo('App\Models\WorkCategory', 'work_category_id', 'id');
    }

    public function galleryImages()
    {
        return $this->hasMany('App\Models\WorkGallery', 'work_id', 'id');
    }
}
