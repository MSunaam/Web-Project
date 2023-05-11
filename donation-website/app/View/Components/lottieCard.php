<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class lottieCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $id, public string $link ,public string $title, public string $hover = 'hover', public string $speed = "1")
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lottie-card');
    }
}
