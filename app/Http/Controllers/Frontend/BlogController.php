<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{

    public function index()
    {
        return view('frontend.pages.blog')->with([
            'blogs' => Blog::whereNotNull('published_at')->orderBy('blog_date', 'desc')->get(),
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::whereNotNull('published_at')->where('slug', $slug)->firstOrFail();
        $previous = Blog::whereNotNull('published_at')->whereDate('blog_date', '<', Carbon::parse($blog->blog_date))->orderBy('blog_date', 'desc')->first();
        if (is_null($previous)) {
            $previous = Blog::whereNotNull('published_at')->whereDate('blog_date', '=', Carbon::parse($blog->blog_date))->where('created_at', '<', Carbon::parse($blog->created_at))->orderBy('created_at', 'desc')->first();
        }
        $next = Blog::whereNotNull('published_at')->whereDate('blog_date', '>', Carbon::parse($blog->blog_date))->orderBy('blog_date')->first();
        if (is_null($next)) {
            $next = Blog::whereNotNull('published_at')->whereDate('blog_date', '=', Carbon::parse($blog->blog_date))->where('created_at', '>', Carbon::parse($blog->created_at))->orderBy('created_at')->first();
        }

        return view('frontend.pages.blog-inside')->with([
            'blog' => $blog,
            'previous' => $previous,
            'next' => $next,
        ]);
    }

}
