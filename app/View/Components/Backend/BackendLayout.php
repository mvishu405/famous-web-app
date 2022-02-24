<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class BackendLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.backend.backend-layout');
    }
}
