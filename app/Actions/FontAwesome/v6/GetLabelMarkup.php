<?php

namespace App\Actions\FontAwesome\v6;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class GetLabelMarkup
{
    use AsAction;

    public function handle(Request $request, int $markerSize)
    {
        // GET LABEL
        $labelText = $request->get('label');
        $labelTextSize = $markerSize / 5;
        $labelColor = '#'.$request->get('lc', 'D9534F');
        $labelFont = $request->get('lf', 'Arial');
        $labelFontColor = '#'.$request->get('lfc', 'FFF');

        // LABEL ANIMATION
        $labelAnimation = $request->get('labelAnimation', null);
        $labelAnimationDuration = $request->get('labelAnimationDuration', '1s');
        $labelAnimationMarkup = GetLabelAnimationMarkup::run($labelAnimation, $labelAnimationDuration);

        // GENERATE LABEL MARKUP
        $labelMarkup = '';
        if ($request->has('label')) {
            $labelMarkup = <<<EOD
            <!--! Icon Label -->
            <svg x="70%" y="70%" width="30%" height="30%" viewbox="0 0 100 100" class="labelAnimation">
                <circle cx="50%" cy="50%" fill="{$labelColor}" r="50%" />
                <text x="50%" y="50%" fill="{$labelFontColor}" text-anchor="middle" dy=".3em" font-size="{$labelTextSize}" font-family="{$labelFont}">{$labelText}</text>
                {$labelAnimationMarkup}
            </svg>
            EOD;
        }

        return $labelMarkup;
    }
}
