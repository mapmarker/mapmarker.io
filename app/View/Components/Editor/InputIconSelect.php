<?php

namespace App\View\Components\Editor;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class InputIconSelect extends Component
{
    public $changeEvent;

    public $default;

    public $icons;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $changeEvent, string $default = 'fa-solid fa-map-location')
    {
        // set default
        $this->changeEvent = $changeEvent;
        $this->default = $default;

        // load available icons
        $this->icons = collect();
        $this->getIconsInDir('fa-solid fa-', base_path('resources/icons/font-awesome-6/solid'));
        $this->getIconsInDir('fa-regular fa-', base_path('resources/icons/font-awesome-6/regular'));
        $this->getIconsInDir('fa-brands fa-', base_path('resources/icons/font-awesome-6/brands'));
    }

    protected function getIconsInDir($prefix, $path)
    {
        $files = scandir($path);
        foreach ($files as $file) {
            // SKIP HIDDEN FILES OR PARENT PATHS
            if (Str::startsWith($file, '.')) {
                continue;
            }

            // DETERMINE FULL PATH
            $itemPath = $path.'/'.$file;

            // CHECK NESTED DIRECTORY
            if (! is_dir($itemPath)) {
                // ADD ICON
                $iconName = data_get(explode('.', $file), 0);

                if ($iconName) {
                    $iconValue = $prefix.$iconName;
                    $this->icons->push((object) [
                        'value' => $iconValue,
                        'label' => $iconValue,
                    ]);
                }
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor.input-icon-select');
    }
}
