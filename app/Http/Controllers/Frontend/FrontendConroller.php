<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomepageBanner;
use App\Models\HomepageSlider;
use App\Models\News;

class FrontendConroller extends Controller
{
    public function index()
    {
        return view('frontend.pages.index')->with([
            'homepageBanners' => HomepageBanner::whereNotNull('published_at')->orderBy('order_column')->get(),
            'testimonials' => HomepageSlider::whereNotNull('published_at')->orderBy('order_column')->get(),
            'news' => News::whereNotNull('published_at')->orderBy('news_date', 'desc')->take(2)->get(),
        ]);
    }
}
