# Laravel-Utils

## Install

```
composer require hatamiarash7/laravel-utils dev-master # Latest version
composer require hatamiarash7/laravel-utils            # Stable version
```

## Usage

There is a separate class for each purpose. Arrays , Strings , … See example of each ones :

### String Functions

```php
use Hatamiarash7\Utils\StringUtils;
. . .

// Remove given words from a string. Pass them as array.
StringUtils::removeWords($words, $string)


// Return length of string. Normal or UTF-8.
StringUtils::len($string)

// Convert all characters to lowercase
StringUtils::lowercase($string)


// Convert all characters to uppercase
StringUtils::uppercase($string)


// Count the number of substring occurrences
StringUtils::subCount($haystack, $needle)
```
