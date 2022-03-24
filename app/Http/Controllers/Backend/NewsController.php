<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('backend.news.index')->with([
            'news' => $news,
        ]);
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveNews(new News(), $request);
        return redirect()->route('backend.news.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('backend.news.show')->with([
            'news' => $news,
        ]);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('backend.news.edit')->with([
            'news' => $news,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $news = News::findOrFail($id);
        $this->saveNews($news, $request);
        return redirect()->route('backend.news.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('backend.news.index')->with([
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
    }

    private function saveNews($news, $data)
    {
        if ($data->hasFile('preview_image')) {
            $news->preview_image = Storage::putFile(config('constants.uploads.image'), $data->preview_image);
        }
        $news->news_date = $data->news_date;
        $news->description = $data->description;
        if ($data->hasFile('news_logo')) {
            $news->news_logo = Storage::putFile(config('constants.uploads.image'), $data->news_logo);
        }
        $news->news_link = $data->news_link;
        $news->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $news->published_at = Carbon::now();
        } else {
            $news->published_at = null;
        }
        $news->save();
    }
}
