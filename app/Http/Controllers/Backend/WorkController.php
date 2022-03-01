<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Work;
use App\Models\WorkGallery;
use App\Models\WorkCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::orderBy('id', 'desc')->get();
        return view('backend.work.index')->with([
            'works' => $works,
        ]);
    }

    public function create()
    {
        return view('backend.work.create')->with([
            'work_categories' => WorkCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveWork(new Work(), $request);
        return redirect()->route('backend.works.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('backend.work.show')->with([
            'work' => $work,
        ]);
    }

    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('backend.work.edit')->with([
            'work' => $work,
            'work_categories' => WorkCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $work = Work::findOrFail($id);
        $this->saveWork($work, $request);
        return redirect()->route('backend.works.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $work->delete();
        return redirect()->route('backend.works.index')->with([
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

    private function saveWork($work, $data)
    {
        $work->work_category_id = $data->work_category_id;
        $work->title = $data->title;
        $work->sub_title = $data->sub_title;
        if ($data->hasFile('preview_image')) {
            $work->preview_image = Storage::putFile(config('constants.uploads.image'), $data->preview_image);
        }
        if ($data->hasFile('homepage_image')) {
            $work->homepage_image = Storage::putFile(config('constants.uploads.image'), $data->homepage_image);
        }
        $work->inside_video_link = $data->inside_video_link;
        if ($data->hasFile('inside_image')) {
            $work->inside_image = Storage::putFile(config('constants.uploads.image'), $data->inside_image);
        }
        if ($data->hasFile('before_image')) {
            $work->before_image = Storage::putFile(config('constants.uploads.image'), $data->before_image);
        }
        if ($data->hasFile('after_image')) {
            $work->after_image = Storage::putFile(config('constants.uploads.image'), $data->after_image);
        }
        if ($data->has('show_on_homepage')) {
            $work->show_on_homepage = Carbon::now();
        } else {
            $work->show_on_homepage = null;
        }

        $work->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $work->published_at = Carbon::now();
        } else {
            $work->published_at = null;
        }
        $work->save();
        foreach ($data->gallery_images as $gallery_image) {
            $workGallery = new WorkGallery();
            $workGallery->image = Storage::putFile(config('constants.uploads.image'), $gallery_image);
            $work->galleryImages()->save($workGallery);
        }
    }

    public function deleteWorkGallery($id)
    {
        WorkGallery::findOrfail($id)->delete();
        return redirect()->back();
    }
}
