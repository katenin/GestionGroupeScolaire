<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

// namespace App\View\Components;

// use Illuminate\View\Component;

// class Input extends Component
// {
//     public $type;
//     public $name;
//     public $value;
//     public $label;

//     public function __construct($type = 'text', $name, $value = '', $label = 'Katenin')
//     {
//         $this->type = $type;
//         $this->name = $name;
//         $this->value = $value;
//         $this->label = $label;
//     }

//     public function render()
//     {
//         return view('components.input');
//     }
// }