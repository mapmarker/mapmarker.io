<?php

namespace App\Helpers\Encoders;

interface Encoder
{
    /**
     * get unicode character from a font aweosome class.
     * @param string $icon the icon to fetch the unicode character for
     * @return string the unicode character or null
     */
    public static function getUnicodeFromIcon($icon);

    /**
     * get the file name containing the icon from unicode mapping.
     * @param string $icon the icon to fetch the unicode character for
     * @return string the webfont file location
     */
    public static function getFile($icon);
}
