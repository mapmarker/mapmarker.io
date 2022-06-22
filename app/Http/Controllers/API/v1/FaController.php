<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller as Controller;
use App\Helpers\FontAwesomeEncoder;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image as Image;

class FaController extends Controller
{
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

        // GET INPUTS
        $icon = Request::get('icon') ?: null;

        // RESIZE THE ICON
        $size = Request::get('size') ?: 30;

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->text($this->getUnicodeCharFromIcon($icon), $size / 2, $size / 2, function ($font) use ($icon, $img, $size) {
            $font->file($this->getIconFontPath($icon));
            $font->size($size * 0.8);
            $font->color(Request::get('color') ?: '000000');
            $font->align('center');
            $font->valign('center');
        });

        $label = Request::get('label') ?: null;
        $labelOffset = Request::get('labelOffset') ?: 0;
        if (!is_null($label)) {

            // ADD THE LABEL
            $img->text($this->getUnicodeCharFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($img, $size) {
                $font->file($this->getIconFontPath('fa-circle'));
                $font->size($size * 0.44);
                $font->color(Request::get('labelColor') ?: 'D9534F');
                $font->align('center');
                $font->valign('center');
            });

            // ADD THE LABEL TEXT
            $img->text($label, $size * 0.8 + $labelOffset, $size * 0.8, function ($font) use ($img, $size) {
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
