<?php

namespace App\Helpers;

use Illuminate\Support\Facades\URL;

class Checker
{
    /**
     * Function for checking the link activity.
     *
     * @return string
     */
    public static function checkActive(string $url): string
    {
        if (request()->is($url) || request()->is("{$url}/*")) {
            return 'active';
        }
        return '';
    }
}
