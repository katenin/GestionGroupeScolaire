<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputOrdinaire extends Component
{
    public $type;
    public $name;
    public $value;
    public $label;

    public function __construct($type = 'text', $name, $value = '', $label = '')
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-ordinaire');
    }
}
