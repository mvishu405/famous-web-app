<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CareerEnquiry;
use App\Models\HomepageBanner;
use App\Models\HomepageSlider;
use App\Models\News;
use App\Models\Team;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontendConroller extends Controller
{
    public function index()
    {
        return view('frontend.pages.index')->with([
            'homepageBanners' => HomepageBanner::whereNotNull('published_at')->orderBy('order_column')->get(),
            'testimonials' => HomepageSlider::whereNotNull('published_at')->orderBy('order_column')->get(),
            'news' => News::whereNotNull('published_at')->orderBy('news_date', 'desc')->take(2)->get(),
            'blogs' => Blog::whereNotNull('published_at')->orderBy('blog_date', 'desc')->take(3)->get(),
            'works' => Work::whereNotNull('published_at')->whereNotNull('show_on_homepage')->orderBy('order_column')->get(),
            'teams' => Team::whereNotNull('published_at')->orderBy('order_column')->get(),
        ]);
    }

    public function storeCareer(Request $request)
    {
        $request->validate([

        ]);

        $careerEnquiry = new CareerEnquiry();
        $careerEnquiry->name = $request->name;
        $careerEnquiry->mobile_number = $request->mobile_number;
        $careerEnquiry->emailId = $request->emailId;
        $careerEnquiry->position = $request->position;
        $careerEnquiry->message = $request->message;
        $careerEnquiry->showreel_link = $request->showreel_link;
        if ($request->hasFile('cv')) {
            $careerEnquiry->cv = Storage::putFile(config('constants.uploads.image'), $request->cv);
        }
        $careerEnquiry->save();
        return response()->json(['message' => 'saved']);

    }
}
