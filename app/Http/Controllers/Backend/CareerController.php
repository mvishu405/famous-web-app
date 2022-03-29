<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareerEnquiry;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('backend.career.index')->with([
            'careers' => CareerEnquiry::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
