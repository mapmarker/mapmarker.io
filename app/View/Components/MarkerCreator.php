<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MarkerCreator extends Component
{
    const FIELDS = [
        'size' => [
            'name' => 'Marker Size',
            'value' => 75,
            'type' => 'number',
            'description' => 'The size of the marker is the height of the final image generated.',
        ],
        'text' => [
            'name' => 'Text',
            'value' => 'A',
            'type' => 'text',
            'description' => 'This is the text that will be rendered on the pin. You can use letters, numbers, special characters, and more. Text will overflow as it becomes too long. So we recommend up to 3 characters.',
        ],
        'icon' => [
            'name' => 'Icon',
            'value' => '',
            'type' => 'text',
            'description' => 'The icon you would like to show in the pin. This has to be a Font Awesome 5 class name.',
        ],
        'iconsize' => [
            'name' => 'Icon Size',
            'value' => 30,
            'type' => 'number',
            'description' => 'The size of the foreground icon in the stack',
        ],
        'color' => [
            'name' => 'Text Color',
            'value' => 'FFF',
            'type' => 'text',
            'description' => 'The color of the map marker',
        ],
        'on' => [
            'name' => 'Background Icon',
            'value' => '',
            'type' => 'text',
            'description' => 'The icon you would like to be the background one in the stack.',
        ],
        'oncolor' => [
            'name' => 'Text Color',
            'value' => 'FFF',
            'type' => 'text',
            'description' => 'The color of the text on the marker.',
        ],
        'background' => [
            'name' => 'Background Color',
            'value' => 'BC5AF4',
            'type' => 'text',
            'description' => 'The color of the marker itself.',
        ],
        'hoffset' => [
            'name' => 'Horizontal Offset',
            'value' => 0,
            'type' => 'number',
            'description' => 'You can manually adjust the position of the text horizontally with this parmeter. Zero is the automatic center and you can move in positive or negative directions.',
        ],
        'voffset' => [
            'name' => 'Vertical Offset',
            'value' => 0,
            'type' => 'number',
            'description' => 'You can manually adjust the position of the text vertically with this parmeter. Zero is the automatic center and you can move in positive or negative directions.',
        ],
    ];

    public $parameters = [];

    public $endpoint = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fields = [], $endpoint = null)
    {
        foreach ($fields as $key => $value) {
            if (is_string($key)) {
                $parameterName = $key;
                $fieldDefiniton = self::FIELDS[$key];
                $fieldDefiniton = array_merge($fieldDefiniton, $value);
            } else {
                $parameterName = $value;
                $fieldDefiniton = self::FIELDS[$value];
            }
            $this->parameters[$parameterName] = $fieldDefiniton;
        }

        $this->endpoint = $endpoint;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.marker-creator');
    }
}
