<?php

namespace App\Http\Controllers\API\v2\FontAwesome\v5;

use App\Actions\Image\ResizeToHeight;
use App\Actions\Image\TrimTransparentBorder;
use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class IconStackController extends Controller
{
    public function show(Request $request)
    {
        $params = $request->all();
        $size = data_get($params, 'size') ?: 30;
        $finalSize = $size;

        // calculate temp size
        // up 2x and make odd for better auto-centering
        $size = round($size * 2.0);
        if ($size % 2 == 0) {
            $size += 1;
        }
        $params['size'] = $size;

        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // INPUTS
        $icon = data_get($params, 'icon') ?: null;
        $on = data_get($params, 'on') ?: $this->getDefaultOnIcon();

        // RESIZE THE ICON
        $iconSize = data_get($params, 'iconsize') * 2.0 ?: ($size * 0.3);
        $voffset = data_get($params, 'voffset') * 2.0 ?: 0;
        $hoffset = data_get($params, 'hoffset') * 2.0 ?: 0;

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        $large_color = (data_get($params, 'oncolor') ?: data_get($params, 'color')) ?: '000000';
        $img->text($this->getUnicodeCharFromIcon($on), $size / 2, $size / 2, function ($font) use ($on, $size, $large_color) {
            $font->file($this->getIconFontPath($on));
            $font->size($size * 0.8);
            $font->color($large_color);
            $font->align('center');
            $font->valign('center');
        });

        $small_color = data_get($params, 'color') ?: null;
        $img->text($this->getUnicodeCharFromIcon($icon), ($size / 2) + $hoffset, ($size / 2) + $voffset, function ($font) use ($icon, $iconSize, $large_color, $small_color) {
            $font->file($this->getIconFontPath($icon));
            $font->size($iconSize);
            $font->color($small_color ?: $large_color);
            $font->align('center');
            $font->valign('center');
        });

        $label = data_get($params, 'label') ?: null;
        $labelOffset = data_get($params, 'labelOffset') ?: 0;
        if (! is_null($label)) {

            // ADD THE LABEL
            $img->text($this->getUnicodeCharFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($size, $params) {
                $font->file($this->getIconFontPath('fa-circle'));
                $font->size($size * 0.44);
                $font->color(data_get($params, 'labelColor') ?: 'D9534F');
                $font->align('center');
                $font->valign('center');
            });

            // ADD THE LABEL TEXT
            $img->text($label, $size * 0.8 + $labelOffset, $size * 0.8, function ($font) use ($size, $params) {
                $font->file($this->getTextFontPath());
                $font->size($size * 0.25);
                $font->color(data_get($params, 'labelTextColor') ?: 'FFFFFF');
                $font->align('center');
                $font->valign('center');
            });
        }

        TrimTransparentBorder::run($img);
        ResizeToHeight::run($img, $finalSize);

        return $img->response('png');
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
