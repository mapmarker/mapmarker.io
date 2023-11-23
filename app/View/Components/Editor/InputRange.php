<?php

namespace App\View\Components\Editor;

use Illuminate\View\Component;

class InputRange extends Component
{
    public $changeEvent;

    public $defaultValue;

    public $min;

    public $max;

    public $step;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($changeEvent, $default, $min = 0, $max = 100, $step = 1)
    {
        $this->changeEvent = $changeEvent;
        $this->defaultValue = $default;
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor.input-range');
    }
}
