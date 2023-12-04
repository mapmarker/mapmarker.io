<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DocsNavigation extends Component
{
    const LINKS = [
        '' => [
            'Getting Started' => '/documentation',
            'API Versions' => '/documentation/versions',
            'Changelog' => '/changelog',
        ],
        'Font Awesome 6' => [
            'Overview' => '/documentation/font-awesome/v6',
            'Pins' => '/documentation/font-awesome/v6/pins',
            'Icons' => '/documentation/font-awesome/v6/icons',
            'Icon Stacks' => '/documentation/font-awesome/v6/icon-stacks',
        ],
        'Font Awesome 5' => [
            'Overview' => '/documentation/font-awesome/v5',
            'Pins' => '/documentation/font-awesome/v5/pins',
            'Icons' => '/documentation/font-awesome/v5/icons',
            'Icon Stacks' => '/documentation/font-awesome/v5/icon-stacks',
        ],
        'Font Awesome 4' => [
            'Overview' => '/documentation/font-awesome/v4',
            'Pins' => '/documentation/font-awesome/v4/pins',
            'Icons' => '/documentation/font-awesome/v4/icons',
            'Icon Stacks' => '/documentation/font-awesome/v4/icon-stacks',
        ],
        'Integrations' => [
            'Overview' => '/documentation/integrations',
            'Bing Maps' => '/documentation/integrations/bing-maps',
            'Google Maps' => '/documentation/integrations/google-maps',
            'Mapbox' => '/documentation/integrations/mapbox',
        ],
        'More' => [
            'License' => '/license',
            'Terms of Service' => '/terms',
            'Privacy Policy' => '/privacy',
        ],
    ];

    public $linkGroups;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->linkGroups = self::LINKS;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.docs-navigation');
    }
}
