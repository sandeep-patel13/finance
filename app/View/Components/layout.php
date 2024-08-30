<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{

    // public $heading;
    // public $title;
    public function __construct()
    {
        // $this->heading = $heading;
        // $this->title = $title;
    }

    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
