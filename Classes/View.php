<?php

namespace ParseCSV\Classes;

/**
 * @author  Sukhwinder Singh
 *
 * View class accpets a file and optional variables to render the correct view and passing the variables to the view
 *
 * @var Object
 *
 * render() takes the file as a parameter and optional variables, allowing to render the correct file with the variables
 * @param string $file recieves the file as a param
 * @param array $vars recieves optional data as an array to be passed along with the view
 */

class View
{
    public function __construct()
    {
    }

    public static function render(string $file, array $vars = [])
    {
        count($vars) ? extract($vars) : '';
        require(BASE_PATH . '/Views/' . $file . '.php');
    }
}
