<?php

namespace App\Models;

use App\Models\Work;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCategory extends Model
{
    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function works()
    {
        return $this->hasMany(Work::class, 'work_category_id', 'id')->whereNotNull('published_at')->orderBy('order_column');
    }
}
