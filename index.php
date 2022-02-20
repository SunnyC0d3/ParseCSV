<?php

define('BASE_PATH', realpath(dirname(__FILE__)));

require 'vendor/autoload.php';

use function ParseCSV\Functions\load;

load('test.csv');
