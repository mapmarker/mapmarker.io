<?php

namespace App\Actions;

use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;
use Lorisleiva\Actions\Concerns\AsAction;
use Intervention\Image\Facades\Image as Image;

class CreateIconStackImage
{
    use AsAction;

    public function handle(array $params)
    {
        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // INPUTS
        $icon = data_get($params, 'icon') ?: null;
        $on = data_get($params, 'on') ?: $this->getDefaultOnIcon();

        // RESIZE THE ICON
        $size = data_get($params, 'size') ?: 30;
        $size = round($size * 1.5);
        if ($size % 2 == 0) {
            $size += 1;
        }
        $iconSize = data_get($params, 'iconsize') ?: ($size * 0.3);
        $voffset = data_get($params, 'voffset') ?: 0;
        $hoffset = data_get($params, 'hoffset') ?: 0;

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        $large_color = (data_get($params, 'oncolor') ?: data_get($params, 'color')) ?: '000000';
        $img->text($this->getUnicodeCharFromIcon($on), $size / 2, $size / 2, function ($font) use ($on, $img, $size, $large_color) {
            $font->file($this->getIconFontPath($on));
            $font->size($size * 0.8);
            $font->color($large_color);
            $font->align('center');
            $font->valign('center');
        });

        $small_color = data_get($params, 'color') ?: null;
        $img->text($this->getUnicodeCharFromIcon($icon), ($size / 2) + $hoffset, ($size / 2) + $voffset, function ($font) use ($icon, $img, $size, $iconSize, $large_color, $small_color) {
            $font->file($this->getIconFontPath($icon));
            $font->size($iconSize);
            $font->color($small_color ?: $large_color);
            $font->align('center');
            $font->valign('center');
        });

        $label = data_get($params, 'label') ?: null;
        $labelOffset = data_get($params, 'labelOffset') ?: 0;
        if (!is_null($label)) {

            // ADD THE LABEL
            $img->text($this->getUnicodeCharFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($img, $size, $params) {
                $font->file($this->getIconFontPath('fa-circle'));
                $font->size($size * 0.44);
                $font->color(data_get($params, 'labelColor') ?: 'D9534F');
                $font->align('center');
                $font->valign('center');
            });

            // ADD THE LABEL TEXT
            $img->text($label, $size * 0.8 + $labelOffset, $size * 0.8, function ($font) use ($img, $size, $params) {
                $font->file($this->getTextFontPath());
                $font->size($size * 0.25);
                $font->color(data_get($params, 'labelTextColor') ?: 'FFFFFF');
                $font->align('center');
                $font->valign('center');
            });
        }

        // trim whitespace
        $img->trim('top-left', ['top', 'bottom', 'left', 'right'], 1);

        // resize to requested size
        $img->resize(null, data_get($params, 'size') ?: 30, function ($constraint) {
            $constraint->aspectRatio();
        });

        return $img;
    }

    protected function getDefaultOnIcon()
    {
        return 'fa-circle-regular';
    }

    protected function getIconFontPath($icon)
    {
        return FontAwesomeV5Encoder::getFile($icon);
    }

    protected function getTextFontPath()
    {
        return base_path('resources/fonts/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeV5Encoder::getUnicodeFromIcon($icon);
    }
}
