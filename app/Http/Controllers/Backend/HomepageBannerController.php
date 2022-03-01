<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\HomepageBanner;

class HomepageBannerController extends Controller
{
    public function index()
    {
        $homepageBanners = HomepageBanner::orderBy('id', 'desc')->get();
        return view('backend.homepage-banner.index')->with([
            'homepageBanners' => $homepageBanners,
        ]);
    }

    public function create()
    {
        return view('backend.homepage-banner.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveHomepageBanner(new HomepageBanner(), $request);
        return redirect()->route('backend.homepage-banners.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $homepageBanner = HomepageBanner::findOrFail($id);
        return view('backend.homepage-banner.show')->with([
            'homepageBanner' => $homepageBanner,
        ]);
    }

    public function edit($id)
    {
        $homepageBanner = HomepageBanner::findOrFail($id);
        return view('backend.homepage-banner.edit')->with([
            'homepageBanner' => $homepageBanner,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $homepageBanner = HomepageBanner::findOrFail($id);
        $this->saveHomepageBanner($homepageBanner, $request);
        return redirect()->route('backend.homepage-banners.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $homepageBanner = HomepageBanner::findOrFail($id);
        $homepageBanner->delete();
        return redirect()->route('backend.homepage-banners.index')->with([
            'message' => config('constants.message.delete'),
        ]);
    }

    private function getStoreValidationRules()
    {
        return [];
        //{{ storeValidationRule }}
        /*
    'desktop_banner' => 'nullable|image|mimes:jpeg,jpg,png',
    'mobile_banner' => 'nullable|image|mimes:jpeg,jpg,png',
     */
    }

    private function getUpdateValidationRules()
    {
        return [];
        //{{ updateValidationRule }}
    }

    private function saveHomepageBanner($homepageBanner, $data)
    {
        if ($data->hasFile('desktop_banner')) {
            $homepageBanner->desktop_banner = Storage::putFile(config('constants.uploads.image'), $data->desktop_banner);
        }
        if ($data->hasFile('mobile_banner')) {
            $homepageBanner->mobile_banner = Storage::putFile(config('constants.uploads.image'), $data->mobile_banner);
        }
        $homepageBanner->title = $data->title;
        $homepageBanner->description = $data->description;
        $homepageBanner->banner_url = $data->banner_url;
        $homepageBanner->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $homepageBanner->published_at = Carbon::now();
        } else {
            $homepageBanner->published_at = null;
        }
        $homepageBanner->save();
    }
}
