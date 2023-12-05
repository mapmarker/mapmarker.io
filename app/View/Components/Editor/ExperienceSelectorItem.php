<?php

namespace App\View\Components\Editor;

use Illuminate\View\Component;

class ExperienceSelectorItem extends Component
{
    public $experience;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $experience)
    {
        $this->experience = $experience;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor.experience-selector-item');
    }
}
