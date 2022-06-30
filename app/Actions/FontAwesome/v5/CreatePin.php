<?php

namespace App\Actions\FontAwesome\v5;

use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;
use Intervention\Image\Facades\Image;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePin
{
    use AsAction;

    public function handle(array $params, $scale = 1.0, $forceOddSize = false)
    {
        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // GET ICON
        $icon = data_get($params, 'icon') ?: null;
        $text = data_get($params, 'text') ?: null;
        $background = data_get($params, 'background') ?: null;

        // RESIZE THE ICON
        $size = (data_get($params, 'size') ?: 40) * $scale;
        if ($forceOddSize && $size % 2 == 0) {
            $size++;
        }

        $iconSize = data_get($params, 'iconSize') ?: ($size / 3.2);
        $voffset = (data_get($params, 'voffset') ?: 0);
        $hoffset = (data_get($params, 'hoffset') ?: 0);

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        // DRAW THE PIN
        $pin_color = $background ?: 'EF5646';
        $img->text($this->getUnicodeCharFromIcon('fa-map-marker'), $size / 2.0, $size / 2.0, function ($font) use ($icon, $size, $pin_color) {
            $font->file($this->getIconFontPath($icon));
            $font->size($size * 0.90);
            $font->color($pin_color);
            $font->align('center');
            $font->valign('center');
        });

        if ($icon) {
            $img->text($this->getUnicodeCharFromIcon($icon), ($img->width() / 2) + $hoffset, ($img->height() / 4) + $voffset, function ($font) use ($params, $icon, $iconSize) {
                $font->file($this->getIconFontPath($icon));
                $font->size((int) $iconSize);
                $font->color(data_get($params, 'color') ?: '#FFFFFF');
                $font->align('center');
                $font->valign('top');
            });
        } elseif (data_get($params, 'text')) {
            $img->text($text, ($img->width() / 2) + $hoffset, ($img->height() / 4) + $voffset, function ($font) use ($params, $size) {
                $font->file($this->getTextFontPath());
                $font->size((int) ($size / 3.2));
                $font->color(data_get($params, 'color') ?: '#FFFFFF');
                $font->align('center');
                $font->valign('top');
            });
        }

        $label = data_get($params, 'label') ?: null;
        $labelOffset = data_get($params, 'labelOffset') ?: 0;
        if (! is_null($label)) {

            // ADD THE LABEL
            $img->text(FontAwesomeV5Encoder::getUnicodeFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($params, $size) {
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
        return base_path('resources/fonts/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeV5Encoder::getUnicodeFromIcon($icon);
    }
}
