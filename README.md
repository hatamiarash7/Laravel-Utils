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

// Convert all characters to lowercase.
StringUtils::lowercase($string)

// Convert all characters to uppercase.
StringUtils::uppercase($string)

// Count the number of substring occurrences.
StringUtils::subCount($haystack, $needle)
```

### Array  Functions

```php
use Hatamiarash7\Utils\ArrayUtils;
. . .

// Remove the duplicates from an array.
ArrayUtils::unique($array, $keepKeys = false)

// Check is key exists and return value.
ArrayUtils::key($key, $array, $returnValue = false)

// Check is value exists in the array and return key.
ArrayUtils::exists($value, array $array, $returnKey = false)

// Returns the first element in an array.
ArrayUtils::first(array $array)

// Returns the last element in an array.
ArrayUtils::last(array $array)

// Returns the first key in an array.
ArrayUtils::firstKey(array $array)

// Returns the last key in an array.
ArrayUtils::lastKey(array $array)

// Searches for a given value in an array of arrays, objects and scalar values.
ArrayUtils::search(array $array, $search)

// Add a prefix to each key of array.
ArrayUtils::addPrefix(array $array, $prefix)
```

### Variable  Functions

```php
use Hatamiarash7\Utils\VariableUtils;
. . .

// Smart convert string to int.
ArrayUtils::int($value)

// Return only digits chars of a string.
ArrayUtils::digits($value)
```
