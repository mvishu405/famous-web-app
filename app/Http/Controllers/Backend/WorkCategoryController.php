<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\WorkCategory;

class WorkCategoryController extends Controller
{
    public function index()
    {
        $workCategories = WorkCategory::orderBy('id', 'desc')->get();
        return view('backend.work-category.index')->with([
            'workCategories' => $workCategories,
        ]);
    }

    public function create()
    {
        return view('backend.work-category.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveWorkCategory(new WorkCategory(), $request);
        return redirect()->route('backend.work-categories.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $workCategory = WorkCategory::findOrFail($id);
        return view('backend.work-category.show')->with([
            'workCategory' => $workCategory,
        ]);
    }

    public function edit($id)
    {
        $workCategory = WorkCategory::findOrFail($id);
        return view('backend.work-category.edit')->with([
            'workCategory' => $workCategory,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $workCategory = WorkCategory::findOrFail($id);
        $this->saveWorkCategory($workCategory, $request);
        return redirect()->route('backend.work-categories.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $workCategory = WorkCategory::findOrFail($id);
        $workCategory->delete();
        return redirect()->route('backend.work-categories.index')->with([
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

    private function saveWorkCategory($workCategory, $data)
    {
        $workCategory->name = $data->name;
        $workCategory->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $workCategory->published_at = Carbon::now();
        } else {
            $workCategory->published_at = null;
        }
        $workCategory->save();
    }
}
