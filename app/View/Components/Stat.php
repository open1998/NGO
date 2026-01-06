<?php

namespace App\View\Components;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Stat extends Component
{
    public $stats;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
        $this->stats = Stat::all();
    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stat');
    }
}
