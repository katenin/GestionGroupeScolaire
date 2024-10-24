<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonOrdinaire extends Component
{
    public $type;
    public $class;
    public $disabled;

    public function __construct($type = 'button', $class = 'btn btn-primary', $disabled = false)
    {
        $this->type = $type;
        $this->class = $class;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-ordinaire');
    }
}
