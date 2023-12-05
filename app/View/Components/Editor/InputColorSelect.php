<?php

namespace App\View\Components\Editor;

use Illuminate\View\Component;

class InputColorSelect extends Component
{
    public $changeEvent;

    public $default;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $changeEvent, string $default = '#333')
    {
        $this->changeEvent = $changeEvent;
        $this->default = $default;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor.input-color-select');
    }
}
