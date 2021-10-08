<?php

namespace App\Helpers;

class Console
{
    /**
     * Function for output of a string, array or object to the console.
     *
     * @param string|array|object $data
     *
     * @return string
     */
    public static function log(string|array|object $data)
    {
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
