<?php

namespace ParseCSV\Classes;

use ParseCSV\AbstractFactory\Parser;

/**
 * @author  Sukhwinder Singh
 *
 * CSVParser class implements the Parser interface to compile any CSV's into data
 *
 * @var Object
 *
 * $file is used as a reference point to store the file being passed as param
 * @var string
 *
 * getFile() returns the file
 *
 * compile() takes the file as a parameter required by the Parser interface and may also recieve the limit and seperator params controlling data output
 * @param string $file recieves the file as a param
 * @param int $limit recieves this as an integer to control how much of the file is to be read in lines
 * @param string $seperator sets the field seperator
 * @return $array if the file was successfully read and looped over otherwise returns false
 */

class CSVParser implements Parser
{
    private $file;

    public function __construct()
    {
    }

    public function getFile()
    {
        return $this->file;
    }

    public function compile(string $file, int $limit = null, string $seperator = ',')
    {
        if (file_exists($file)) {
            $this->file = fopen($file, 'r');
            while (!feof($this->file)) {
                $array[] = fgetcsv($this->file, $limit, $seperator);
            }
            fclose($this->file);
            return $array;
        }
        return false;
    }
}
