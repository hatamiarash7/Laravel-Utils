# Laravel-Utils

## Install

```sh
composer require hatamiarash7/laravel-utils dev-master # Latest version
composer require hatamiarash7/laravel-utils            # Stable version
```

## Usage

There is a separate classes for each purpose. Arrays , Strings , … See example of each ones :

### String Functions

```php
use Hatamiarash7\Utils\StringUtils;


// Remove given words from a string. Pass them as array.
StringUtils::removeWords($words, $string);

// Return length of string. Normal or UTF-8.
StringUtils::len($string);

// Convert all characters to lowercase.
StringUtils::lowercase($string);

// Convert all characters to uppercase.
StringUtils::uppercase($string);

// Count the number of substring occurrences.
StringUtils::subCount($haystack, $needle);

// Summarize a string by limit. You can use end string for summarized string.
StringUtils::summarize($content, $max_characters = 100, $append = " ...")

// Convert english letters to persian.
StringUtils::toPersian($expression)

// Convert numeral string to persian price format.
StringUtils::toPersianPrice($expression)
```

### Array  Functions

```php
use Hatamiarash7\Utils\ArrayUtils;


// Remove the duplicates from an array.
ArrayUtils::unique($array, $keepKeys = false);

// Check is key exists and return value.
ArrayUtils::key($key, $array, $returnValue = false);

// Check is value exists in the array and return key.
ArrayUtils::exists($value, array $array, $returnKey = false);

// Returns the first element in an array.
ArrayUtils::first(array $array);

// Returns the last element in an array.
ArrayUtils::last(array $array);

// Returns the first key in an array.
ArrayUtils::firstKey(array $array);

// Returns the last key in an array.
ArrayUtils::lastKey(array $array);

// Searches for a given value in an array of arrays, objects and scalar values.
ArrayUtils::search(array $array, $search);

// Add a prefix to each key of array.
ArrayUtils::addPrefix(array $array, $prefix);
```

### Variable  Functions

```php
use Hatamiarash7\Utils\VariableUtils;


// Smart convert string to int.
ArrayUtils::int($value);

// Return only digits chars of a string.
ArrayUtils::digits($value);
```

## Tests

All tests written using [orchestral's testbench](https://github.com/orchestral/testbench)

Check and run them to get more information about functions.

## Contributing

If you want to add new functions ( or even a new class ) :

1. Fork repository !  
2. Create your feature branch : `git checkout -b my-new-functions`  
3. Commit your changes : `git commit -am 'Add some functions'`    
4. Push to the branch : `git push origin my-new-functions`  
5. Submit a pull request :D  

## Issues

Each project may have many problems. Contributing to the better development of this project by reporting them.
