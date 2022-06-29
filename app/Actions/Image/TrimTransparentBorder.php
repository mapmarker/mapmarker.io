<?php

namespace App\Actions\Image;

use Intervention\Image\Image;
use Lorisleiva\Actions\Concerns\AsAction;

class TrimTransparentBorder
{
    use AsAction;

    public function handle(Image $img)
    {
        $img->trim('transparent', ['top', 'bottom'], 1);
    }
}
