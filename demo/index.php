<?php

/**
 * @file
 * Demonstration file of using LoremGutenberg library.
 */

require '../vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use writecrow\CountryCodeConverter\CountryCodeConverter;

print_r(CountryCodeConverter::convert('AL'));
