<?php

namespace App\Http\Controllers\API\v1\FontAwesome\v5;

use App\Http\Controllers\Controller;
use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image as Image;

class PinController extends Controller
{
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

    public function show()
    {

        // OPEN ICON DEFAULT IMAGE
        $img = file_get_contents(resource_path('images/icon.png'));
        $img = Image::make($img);

        // GET ICON
        $icon = Request::get('icon') ?: null;
        $text = Request::get('text') ?: null;
        $background = Request::get('background') ?: null;

        // RESIZE THE ICON
        $size = Request::get('size') ?: 40;
        $iconSize = Request::get('iconSize') ?: ($size / 3.2);
        $voffset = (Request::get('voffset') ?: 0) + 3; //calibrated offset +3
        $hoffset = (Request::get('hoffset') ?: 0) + 1; // calibrated offset +1

        $img->resize($size, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        // DRAW THE PIN
        $pin_color = $background ?: 'EF5646';
        $img->text($this->getUnicodeCharFromIcon('fa-map-marker'), $size / 2.0, $size / 2.0, function ($font) use ($icon, $img, $size, $pin_color) {
            $font->file($this->getIconFontPath($icon));
            $font->size($size * 0.90);
            $font->color($pin_color);
            $font->align('center');
            $font->valign('center');
        });

        if ($icon) {
            $img->text($this->getUnicodeCharFromIcon($icon), ($img->width() / 2) + $hoffset, ($img->height() / 4) + $voffset, function ($font) use ($icon, $iconSize, $size) {
                $font->file($this->getIconFontPath($icon));
                $font->size((int) $iconSize);
                $font->color(Request::get('color') ?: '#FFFFFF');
                $font->align('center');
                $font->valign('top');
            });
        } elseif (Request::get('text')) {
            $img->text($text, ($img->width() / 2) + $hoffset, ($img->height() / 4) + $voffset, function ($font) use ($size) {
                $font->file($this->getTextFontPath());
                $font->size((int) ($size / 3.2));
                $font->color(Request::get('color') ?: '#FFFFFF');
                $font->align('center');
                $font->valign('top');
            });
        }

        $label = Request::get('label') ?: null;
        $labelOffset = Request::get('labelOffset') ?: 0;
        if (!is_null($label)) {

            // ADD THE LABEL
            $img->text(IconEncoder::getUnicodeFromIcon('fa-circle'), $size * 0.8, $size * 0.8, function ($font) use ($img, $size) {
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
