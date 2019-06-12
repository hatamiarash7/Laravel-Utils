<?php

namespace Hatamiarash7\Utils;

/**
 * Class ArrayUtils
 *
 * @package Hatamiarash7\Utils
 */
class ArrayUtils
{
	/**
	 * Remove the duplicates from an array.
	 *
	 * @param array $array
	 * @param bool $keepKeys
	 * @return array
	 */
	public static function unique($array, $keepKeys = false): array
	{
		if ($keepKeys) {
			$array = array_unique($array);
		} else {
			$array = array_keys(array_flip($array));
		}
		return $array;
	}

	/**
	 * Check is key exists
	 *
	 * @param string $key
	 * @param mixed $array
	 * @param bool $returnValue
	 * @return mixed
	 */
	public static function key($key, $array, $returnValue = false)
	{
		$isExists = array_key_exists((string)$key, (array)$array);
		if ($returnValue) {
			if ($isExists) {
				return $array[$key];
			}
			return null;
		}
		return $isExists;
	}

	/**
	 * Check is value exists in the array
	 *
	 * @param string $value
	 * @param mixed $array
	 * @param bool $returnKey
	 * @return mixed
	 *
	 * @SuppressWarnings(PHPMD.ShortMethodName)
	 */
	public static function exists($value, array $array, $returnKey = false)
	{
		$inArray = in_array($value, $array, true);
		if ($returnKey) {
			if ($inArray) {
				return array_search($value, $array, true);
			}
			return null;
		}
		return $inArray;
	}

	/**
	 * Returns the first element in an array.
	 *
	 * @param  array $array
	 * @return mixed
	 */
	public static function first(array $array)
	{
		return reset($array);
	}

	/**
	 * Returns the last element in an array.
	 *
	 * @param  array $array
	 * @return mixed
	 */
	public static function last(array $array)
	{
		return end($array);
	}

	/**
	 * Returns the first key in an array.
	 *
	 * @param  array $array
	 * @return int|string
	 */
	public static function firstKey(array $array)
	{
		reset($array);
		return key($array);
	}

	/**
	 * Returns the last key in an array.
	 *
	 * @param  array $array
	 * @return int|string
	 */
	public static function lastKey(array $array)
	{
		end($array);
		return key($array);
	}

	/**
	 * Searches for a given value in an array of arrays, objects and scalar values.
	 *
	 * @param  array $array The array to search
	 * @param  mixed $search The value to search for
	 * @return boolean|mixed  False on failure or the array key on success
	 */
	public static function search(array $array, $search)
	{
		$search = (string)$search;
		foreach ($array as $key => $elem) {
			$key = (string)$key;
			if (is_object($elem)) {
				$elem = (array)$elem;
				/** @noinspection NotOptimalIfConditionsInspection */
				if (in_array($search, $elem, false)) {
					return $key;
				}
			} elseif (is_array($elem) && in_array($search, $elem, false)) {
				return $key;
			} elseif (is_scalar($elem) && $elem === $search) {
				return $key;
			}
		}
		return false;
	}

	/**
	 * Add some prefix to each key
	 *
	 * @param array  $array
	 * @param string $prefix
	 * @return array
	 */
	public static function addPrefix(array $array, $prefix): array
	{
		$result = [];
		foreach ($array as $key => $item) {
			$result[$prefix . $key] = $item;
		}
		return $result;
	}
}
