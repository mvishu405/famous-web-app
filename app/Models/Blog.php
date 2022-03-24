<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Blog extends Model
{
    use HasFactory;
    use HasTags;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function relatedBlogs()
    {
        return $this->belongsToMany('App\Models\Blog', 'related_blogs', 'blog_id', 'related_blog_id')->withTimestamps();
    }

    public function publishedRelatedBlogs()
    {
        return $this->belongsToMany('App\Models\Blog', 'related_blogs', 'blog_id', 'related_blog_id')->whereNotNull('published_at')->withTimestamps();
    }
}
