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
   *   A country name or 2- or 3-digit code.
   * @param string $output
   *   The "type" of output desired (e.g., 2-digit code).
   *
   * @return string
   *   The desired output
   */
  public static function convert($input = '', $output = 'two-digit') {
    $output_map = [
      'name' => 0,
      'two-digit' => 1,
      'three-digit' => 2,
      'numeric' => 3,
    ];
    $path = __DIR__ . '/data/countries.csv';
    if (($handle = fopen($path, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",", '"', "")) !== FALSE) {
        if (in_array($input, $data)) {
          $output_format = $output_map[$output];
          return $data[$output_format];
        }
      }
      fclose($handle);
    }
    return $input;
  }

}
