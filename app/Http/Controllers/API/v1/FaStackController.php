<?php

namespace App\Http\Controllers\API\v1;

use App\Helpers\FontAwesomeEncoder;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image as Image;

class FaStackController extends Controller
{
    protected function getDefaultOnIcon()
    {
        return 'fa-circle-o';
    }

    protected function getIconFontPath($icon)
    {
        return base_path('resources/fonts/legacy/fontawesome-webfont.ttf');
    }

    protected function getTextFontPath()
    {
        return base_path('resources/fonts/legacy/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeEncoder::getUnicodeFromIcon($icon);
    }

    public function show()
    {

        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // INPUTS
        $icon = Request::get('icon') ?: null;
        $on = Request::get('on') ?: $this->getDefaultOnIcon();

        // RESIZE THE ICON
        $size = Request::get('size') ?: 30;
        $iconSize = Request::get('iconsize') ?: ($size * 0.3);
        $voffset = Request::get('voffset') ?: 0;
        $hoffset = Request::get('hoffset') ?: 0;

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        $large_color = (Request::get('oncolor') ?: Request::get('color')) ?: '000000';
        $img->text($this->getUnicodeCharFromIcon($on), $size / 2, $size / 2, function ($font) use ($on , $size, $large_color) {
            $font->file($this->getIconFontPath($on));
            $font->size($size * 0.8);
            $font->color($large_color);
            $font->align('center');
            $font->valign('center');
        });

        $small_color = Request::get('color') ?: null;
        $img->text($this->getUnicodeCharFromIcon($icon), ($size / 2) + $hoffset, ($size / 2) + $voffset, function ($font) use ($icon  , $iconSize, $large_color, $small_color) {
            $font->file($this->getIconFontPath($icon));
            $font->size($iconSize);
            $font->color($small_color ?: $large_color);
            $font->align('center');
            $font->valign('center');
        });

        $label = Request::get('label') ?: null;
        $labelOffset = Request::get('labelOffset') ?: 0;
        if (! is_null($label)) {

            // ADD THE LABEL
            $img->text($this->getUnicodeCharFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($size) {
                $font->file($this->getIconFontPath('fa-circle'));
                $font->size($size * 0.44);
                $font->color(Request::get('labelColor') ?: 'D9534F');
                $font->align('center');
                $font->valign('center');
            });

            // ADD THE LABEL TEXT
            $img->text($label, $size * 0.8 + $labelOffset, $size * 0.8, function ($font) use ($size) {
                $font->file($this->getTextFontPath());
                $font->size($size * 0.25);
                $font->color(Request::get('labelTextColor') ?: 'FFFFFF');
                $font->align('center');
                $font->valign('center');
            });
        }

        return $img->response('png');
    }
}
