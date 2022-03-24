<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::whereNotNull('published_at');
        if (request()->has('sort_by_asc')) {
            $news = $news->orderBy('news_date', 'asc');
        } else {
            $news = $news->orderBy('news_date', 'desc');
        }
        return view('frontend.pages.news')->with([
            'news' => $news->get(),
        ]);
    }
}
