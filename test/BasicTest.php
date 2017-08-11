<?php

namespace writecrow\CountryCodeConverter;

use \PHPUnit\Framework\TestCase;

/**
 * Test basic strings are converted correctly.
 */
class BasicTest extends TestCase {

  /**
   * Test assertions.
   */
  public function testBasic() {
    $this->assertEquals('Albania', (CountryCodeConverter::convert('AL')));
    $this->assertEquals('Albania', (CountryCodeConverter::convert('ALB')));
    $this->assertEquals('Albania', (CountryCodeConverter::convert('008')));
    $this->assertEquals('AL', (CountryCodeConverter::convert('Albania')));
    $this->assertEquals('No Mans Land', (CountryCodeConverter::convert('No Mans Land')));
    // Test when an output type is explicitly provided.
    $this->assertEquals('ALB', (CountryCodeConverter::convert('AL', 'three-digit')));
    $this->assertEquals('008', (CountryCodeConverter::convert('ALB', 'numeric')));
    $this->assertEquals('AL', (CountryCodeConverter::convert('008', 'two-digit')));
    $this->assertEquals('ALB', (CountryCodeConverter::convert('Albania', 'three-digit')));
    $this->assertEquals('No Mans Land', (CountryCodeConverter::convert('No Mans Land', 'numeric')));

  }

}
