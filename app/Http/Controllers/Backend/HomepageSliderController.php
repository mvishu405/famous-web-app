<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\HomepageSlider;

class HomepageSliderController extends Controller
{
    public function index()
    {
        $homepageSliders = HomepageSlider::orderBy('id', 'desc')->get();
        return view('backend.homepage-slider.index')->with([
            'homepageSliders' => $homepageSliders,
        ]);
    }

    public function create()
    {
        return view('backend.homepage-slider.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveHomepageSlider(new HomepageSlider(), $request);
        return redirect()->route('backend.homepage-sliders.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $homepageSlider = HomepageSlider::findOrFail($id);
        return view('backend.homepage-slider.show')->with([
            'homepageSlider' => $homepageSlider,
        ]);
    }

    public function edit($id)
    {
        $homepageSlider = HomepageSlider::findOrFail($id);
        return view('backend.homepage-slider.edit')->with([
            'homepageSlider' => $homepageSlider,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $homepageSlider = HomepageSlider::findOrFail($id);
        $this->saveHomepageSlider($homepageSlider, $request);
        return redirect()->route('backend.homepage-sliders.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $homepageSlider = HomepageSlider::findOrFail($id);
        $homepageSlider->delete();
        return redirect()->route('backend.homepage-sliders.index')->with([
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

    private function saveHomepageSlider($homepageSlider, $data)
    {
        $homepageSlider->name = $data->name;
        $homepageSlider->designation = $data->designation;
        $homepageSlider->description = $data->description;
        if ($data->hasFile('image')) {
            $homepageSlider->image = Storage::putFile(config('constants.uploads.image'), $data->image);
        }
        $homepageSlider->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $homepageSlider->published_at = Carbon::now();
        } else {
            $homepageSlider->published_at = null;
        }
        $homepageSlider->save();
    }
}
