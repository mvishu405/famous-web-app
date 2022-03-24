<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        return view('frontend.pages.blog')->with([
            'blogs' => Blog::whereNotNull('published_at')->orderBy('blog_date', 'desc')->get(),
        ]);
    }

}
