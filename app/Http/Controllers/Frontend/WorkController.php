<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\WorkCategory;

class WorkController extends Controller
{
    public function index()
    {
        return view('frontend.pages.work')->with([
            'work_categories' => WorkCategory::whereNotNull('published_at')->orderBy('order_column', 'asc')->get(),
        ]);
    }

    public function show($slug)
    {
        return view('frontend.pages.work-inside')->with([
            'work' => Work::whereNotNull('published_at')->where('slug', $slug)->firstOrFail(),
        ]);
    }
}
