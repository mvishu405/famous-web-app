<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('backend.contact.index')->with([
            'contacts' => ContactEnquiry::orderBy('id', 'desc')->get(),
        ]);
    }
}
