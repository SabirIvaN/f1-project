<?php

namespace App\Helpers;

class Console
{
    /**
     * Function for output of a string or object to the console.
     *
     * @return string
     */
    public static function output($data)
    {
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
