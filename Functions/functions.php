<?php

/**
 * @author  Sukhwinder Singh
 *
 * Functions will include multitude of functions which can be easily accessible in any file
 *
 */

namespace ParseCSV\Functions;

use ParseCSV\SimpleFactory\Factory;
use ParseCSV\Classes\View;

/**
 * load() takes the file as a param and build the apporipriate view
 * @var Function
 * @param string $file accepts param for the file, by default it is empty and returns the error view
 */

if (! function_exists('ParseCSV\Functions\load')) {
    function load(string $file = '')
    {
        if ($file != '') {
            $factory = new Factory();
            $parser = $factory->parser();
            if ($result = $parser->compile(BASE_PATH . '/' . $file)) {
                View::render('table', array(
                    $result
                ));
            } else {
                View::render('error');
            }
        } else {
            View::render('error');
        }
    }
}
