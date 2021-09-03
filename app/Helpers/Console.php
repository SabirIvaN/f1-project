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
        if(is_array($data) || is_object($data)){
            echo("<script>console.log('php_array: " . json_encode($data) . "');</script>");
        } else {
            echo("<script>console.log('php_string: " . $data . "');</script>");
        }
    }
}
