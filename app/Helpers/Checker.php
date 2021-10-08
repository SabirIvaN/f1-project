<?php

namespace App\Helpers;

class Checker
{
    /**
     * Function for checking the link activity.
     *
     * @param string $url
     *
     * @return string
     */
    public static function activeLink(string $url): string
    {
        if (request()->is($url) || request()->is("{$url}/*")) {
            return 'active';
        }
        return '';
    }
}
