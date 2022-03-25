<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('backend.blog.index')->with([
            'blogs' => $blogs,
        ]);
    }

    public function create()
    {
        return view('backend.blog.create')->with([
            'related_blogs' => Blog::select('id', 'title')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveBlog(new Blog(), $request);
        return redirect()->route('backend.blogs.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.show')->with([
            'blog' => $blog,
        ]);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit')->with([
            'blog' => $blog,
            'related_blogs' => Blog::select('id', 'title')->get()->except($blog->id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $blog = Blog::findOrFail($id);
        $this->saveBlog($blog, $request);
        return redirect()->route('backend.blogs.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('backend.blogs.index')->with([
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

    private function saveBlog($blog, $data)
    {
        $blog->title = $data->title;
        if ($data->hasFile('featured_image')) {
            $blog->featured_image = Storage::putFile(config('constants.uploads.image'), $data->featured_image);
        }
        if ($data->hasFile('cover_image')) {
            $blog->cover_image = Storage::putFile(config('constants.uploads.image'), $data->cover_image);
        }
        $blog->blog_date = Carbon::parse($data->blog_date);
        $blog->read_time = $data->read_time;
        $blog->description = $data->description;
        $blog->meta_title = $data->meta_title;
        $blog->meta_keywords = $data->meta_keywords;
        if ($data->hasFile('meta_image')) {
            $blog->meta_image = Storage::putFile(config('constants.uploads.image'), $data->meta_image);
        }
        $blog->meta_description = $data->meta_description;
        $blog->og_title = $data->og_title;
        $blog->og_type = $data->og_type;
        $blog->og_url = $data->og_url;
        $blog->og_site_name = $data->og_site_name;
        if ($data->hasFile('og_image')) {
            $blog->og_image = Storage::putFile(config('constants.uploads.image'), $data->og_image);
        }
        $blog->og_description = $data->og_description;
        $blog->twitter_title = $data->twitter_title;
        $blog->twitter_card = $data->twitter_card;
        $blog->twitter_site = $data->twitter_site;
        if ($data->hasFile('twitter_image')) {
            $blog->twitter_image = Storage::putFile(config('constants.uploads.image'), $data->twitter_image);
        }
        $blog->twitter_description = $data->twitter_description;
        $blog->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $blog->published_at = Carbon::now();
        } else {
            $blog->published_at = null;
        }
        $blog->save();
        $blog->relatedBlogs()->sync($data->related_blog_ids);
    }
}
