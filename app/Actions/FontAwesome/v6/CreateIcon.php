<?php

namespace App\Actions\FontAwesome\v6;

use Lorisleiva\Actions\Concerns\AsAction;

class CreateIcon
{
    use AsAction;

    public function handle(string $iconMarkup, string $markerColor, string $markerSize, string $labelMarkup = '')
    {
        return <<<EOD
        <svg fill="{$markerColor}" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" width="{$markerSize}" height="{$markerSize}">
            <!--! Generated with MapMarker.io - https://mapmarker.io License - https://www.mapmarker.io/license -->
            {$iconMarkup} {$labelMarkup}
        </svg>
        EOD;
    }
}
