<?php

namespace App\Actions\FontAwesome\v5;

use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;
use Intervention\Image\Facades\Image;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateIcon
{
    use AsAction;

    public function handle(array $params, $scale = 1.0, $forceOddSize = false)
    {
        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // GET INPUTS
        $icon = data_get($params, 'icon') ?: null;

        // RESIZE THE ICON
        $size = (data_get($params, 'size') ?: 30) * $scale;
        if ($forceOddSize && $size % 2 == 0) {
            $size++;
        }

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->text($this->getUnicodeCharFromIcon($icon), $size / 2, $size / 2, function ($font) use ($params, $icon, $size) {
            $font->file($this->getIconFontPath($icon));
            $font->size($size * 0.8);
            $font->color(data_get($params, 'color') ?: '000000');
            $font->align('center');
            $font->valign('center');
        });

        $label = data_get($params, 'label') ?: null;
        $labelOffset = data_get($params, 'labelOffset') ?: 0;
        if (! is_null($label)) {

            // ADD THE LABEL
            $img->text($this->getUnicodeCharFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($params, $size) {
                $font->file($this->getIconFontPath('fa-circle'));
                $font->size($size * 0.44);
                $font->color(data_get($params, 'labelColor') ?: 'D9534F');
                $font->align('center');
                $font->valign('center');
            });

            // ADD THE LABEL TEXT
            $img->text($label, $size * 0.8 + $labelOffset, $size * 0.8, function ($font) use ($params, $size) {
                $font->file($this->getTextFontPath());
                $font->size($size * 0.25);
                $font->color(data_get($params, 'labelTextColor') ?: 'FFFFFF');
                $font->align('center');
                $font->valign('center');
            });
        }

        return $img;
    }

    protected function getIconFontPath($icon)
    {
        return FontAwesomeV5Encoder::getFile($icon);
    }

    protected function getTextFontPath()
    {
        return base_path('resources/fonts/legacy/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeV5Encoder::getUnicodeFromIcon($icon);
    }
}
