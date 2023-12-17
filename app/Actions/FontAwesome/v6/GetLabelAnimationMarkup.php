<?php

namespace App\Actions\FontAwesome\v6;

use Lorisleiva\Actions\Concerns\AsAction;

class GetLabelAnimationMarkup
{
    use AsAction;

    public function handle(string $animation, string $animationDuration)
    {
        if ($animation == 'blink') {
            return  <<<EOD
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
                        animation: blink {$animationDuration} linear infinite;
                        -webkit-animation: blink {$animationDuration} linear infinite;
                    }
                </style>
            EOD;
        } elseif ($animation == 'pulse') {
            return  <<<EOD
                <style>

                    @keyframes pulse {
                        0% {
                            opacity: 1.0;
                        }
                        25% {
                            opacity: 1.0;
                        }
                        100% {
                            opacity: 0.0;
                        }
                    }

                    .labelAnimation {
                        animation-name: pulse;
                        animation-duration: {$animationDuration};
                        animation-iteration-count: infinite;
                        animation-direction: alternate;
                    }
                </style>
            EOD;
        }

        return '';
    }
}
