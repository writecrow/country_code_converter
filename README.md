# Country Code Converter

[![Circle CI](https://circleci.com/gh/writecrow/country_code_converter.svg?style=shield)](https://circleci.com/gh/writecrow/country_code_converter)

A PHP library for converting ISO country codes to names and vice-versa.

Country data was last updated on August 10, 2017, from
[https://en.wikipedia.org/wiki/ISO_3166-1#Officially_assigned_code_elements](https://en.wikipedia.org/wiki/ISO_3166-1#Officially_assigned_code_elements)

The library recognizes ISO 2-digit, 3-digit, and numeric codes.

## Usage in an application
The included `/demo/index.php` file contains a generation form demo.

Make your code aware of the CountryCodeConverter class via your favorite method
(e.g., `use` or `require`)

Then pass a country code or country name into the class:
```php
echo CountryCodeConverter::convert('AL');
// Will print 'Albania'

echo CountryCodeConverter::convert('ALB');
// Will print 'Albania'

echo CountryCodeConverter::convert('008');
// Will print 'Albania'

echo CountryCodeConverter::convert('Albania');
// Will print 'AL'
```

### Explicitly requesting return format.
If you want a specific format returned, pass the desired format as a second
parameter:

```php
echo CountryCodeConverter::convert('Albania', 'name');
// Will print 'Albania'

echo CountryCodeConverter::convert('Albania', 'two-digit');
// Will print 'AL'

echo CountryCodeConverter::convert('Albania', 'three-digit');
// Will print 'ALB'

echo CountryCodeConverter::convert('Albania', 'numeric');
// Will print '008'
```
