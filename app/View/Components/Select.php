<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $options;
    public $selected;
    public $label;

    public function __construct($name, $options = [], $selected = null, $label = '')
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
