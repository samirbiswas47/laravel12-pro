<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public array $menuNames;
    public bool $isOpen;

    public function __construct()
    {
        //
        $this->isOpen= true;
        $this->menuNames = [
            ['label' => 'Dashboard', 'icon' => 'fas fa-home', 'route' => 'dashboard', 'key' => 1],
            ['label' => 'Users', 'icon' => 'fas fa-users', 'route' => 'user', 'key' => 2]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar',['menu'=>$this->menuNames, 'isOpen'=>$this->isOpen]);
    }
}
