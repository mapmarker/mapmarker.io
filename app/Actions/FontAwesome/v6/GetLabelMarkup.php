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
        $labelAnimationMarkup = null;

        if ($labelAnimation == 'blink') {
            $labelAnimationMarkup = <<<EOD
                <style>

                    @keyframes blink {
                        0% {
                            opacity: 1;
                        }
                        49% {
                            opacity: 1;
                        }
                        50% {
                            opacity: 0;
                        }
                        99% {
                            opacity: 0;
                        }
                        100% {
                            opacity: 1;
                        }
                    }

                    @-webkit-keyframes blink {
                        0% {
                            opacity: 1;
                        }
                        49% {
                            opacity: 1;
                        }
                        50% {
                            opacity: 0;
                        }
                        99% {
                            opacity: 0;
                        }
                        100% {
                            opacity: 1;
                        }
                     }

                    .labelAnimation {
                        animation: blink {$labelAnimationDuration} linear infinite;
                        -webkit-animation: blink {$labelAnimationDuration} linear infinite;
                    }
                    </style>
            EOD;
        }

        // GENERATE LABEL MARKUP
        $labelMarkup = '';
        if ($request->has('label')) {
            $labelMarkup = <<<EOD
            <!--! Icon Label -->
            <svg x="60%" y="60%" width="40%" height="40%" viewbox="0 0 100 100" class="labelAnimation">
                <circle cx="50%" cy="50%" fill="{$labelColor}" r="50%" />
                <text x="50%" y="50%" fill="{$labelFontColor}" text-anchor="middle" dy=".3em" font-size="{$labelTextSize}" font-family="{$labelFont}">{$labelText}</text>
                {$labelAnimationMarkup}
            </svg>
            EOD;
        }

        return $labelMarkup;
    }
}
