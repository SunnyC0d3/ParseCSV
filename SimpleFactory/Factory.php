<?php

namespace ParseCSV\SimpleFactory;

use ParseCSV\Classes\CSVParser;

/**
 * @author  Sukhwinder Singh
 *
 * Factory class is the basis for all classes to be instantiated here within their own methods
 *
 * @var Object
 *
 * parser() builds the CSVParser class and returns it
 * @return CSVParser() is returned
 */

class Factory
{
    public function parser()
    {
        return new CSVParser();
    }
}
