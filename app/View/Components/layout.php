<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public array $props;

    public function __construct(array $props = [])
    {
        $this->props = $props;
    }

    public function render(): View|Closure|string
    {
        return view('components.layout', ['data' => $this->props]);
    }
}
