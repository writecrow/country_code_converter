<?php

namespace writecrow\CountryCodeConverter;

/**
 * Class CountryCodeConverter.
 *
 * Convert country name to codes or vice-versa.
 *
 * @author markfullmer <mfullmer@gmail.com>
 *
 * @link https://github.com/writecrow/country_code_converter/
 *
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
class CountryCodeConverter {

  /**
   * Main converter method.
   *
   * @param string $input
   *    A country name or 2- or 3-digit code.
   * @param string $output
   *    The "type" of output desired (e.g., 2-digit code).
   *
   * @return string
   *    The desired output
   */
  public static function convert($input = '', $output = '') {
    $output_map = [
      'name' => 0,
      'two-digit' => 1,
      'three-digit' => 2,
      'numeric' => 3,
    ];
    $path = __DIR__ . '/data/countries.csv';
    $data = array_map('str_getcsv', file($path));
    foreach ($data as $key => $set) {
      if (in_array($input, $set)) {
        if ($output && array_key_exists($output, $output_map)) {
          $type = $output_map[$output];
          return $set[$type];
        }
        else {
          switch ($input) {
            case $set[0]:
              return $set[1];

            default:
              return $set[0];
          }
        }
      }
    }
    // If no matches, return the original user input.
    return $input;
  }

}
