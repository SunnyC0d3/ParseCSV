<?php

namespace ParseCSV\AbstractFactory;

/**
 * @author  Sukhwinder Singh
 *
 * Parser interface, used as a contract for Parsers that are being built to comply and use the compile method
 *
 * @var Interface
 *
 * compile() is adopted by all Parsers implementing this interface to provide an abstract for their own versions
 * @param string $file accepts a file
 */

interface Parser
{
    public function compile(string $file);
}
