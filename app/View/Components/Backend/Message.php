<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class Message extends Component
{

    public $level;
    public $message;

    public function __construct($level = "info", $message = [])
    {
        $this->level   = $level ?? 'info';
        $this->message = $message;
    }

    public function render()
    {
        return view('components.backend.message');
    }
}
