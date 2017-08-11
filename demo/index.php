<?php

/**
 * @file
 * Demonstration file of using LoremGutenberg library.
 */

require '../vendor/autoload.php';

use writecrow\CountryCodeConverter\CountryCodeConverter;

print_r(CountryCodeConverter::convert('AL'));
