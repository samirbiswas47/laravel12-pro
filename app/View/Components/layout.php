<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public function __construct()
    {
        $this->name='Samir Biswas1';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout', [ "name" =>$this->name]);
    }
}
