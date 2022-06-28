<?php

namespace App\Actions\Image;

use Intervention\Image\Image;
use Lorisleiva\Actions\Concerns\AsAction;

class ResizeToHeight
{
    use AsAction;

    public function handle(Image $img, int $size)
    {
        $img->resize(null, $size, function ($constraint) {
            $constraint->aspectRatio();
        });
    }
}
