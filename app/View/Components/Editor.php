<?php

namespace App\View\Components;

use App\Actions\FontAwesome\v6\GetLabelAnimationMarkup;
use Illuminate\View\Component;

class Editor extends Component
{
    public $labelAnimationOptions;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->labelAnimationOptions = GetLabelAnimationMarkup::ANIMATIONS;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor');
    }
}
