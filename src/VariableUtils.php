<?php

namespace Hatamiarash7\Utils;

/**
 * Class VariableUtils
 *
 * @package Hatamiarash7\Utils
 */
class VariableUtils
{
	/**
	 * Smart convert string to int
	 *
	 * @param string $value
	 * @return int
	 */
	public static function int($value): int
	{
		$cleaned = preg_replace('#[^0-9-+.,]#', '', $value);
		preg_match('#[-+]?[\d]+#', $cleaned, $matches);
		$result = $matches[0] ?? 0;
		return (int)$result;
	}

	/**
	 * Return only digits chars
	 *
	 * @param $value
	 * @return mixed
	 */
	public static function digits($value)
	{
		$cleaned = str_replace(['-', '+'], '', $value);
		$cleaned = filter_var($cleaned, FILTER_SANITIZE_NUMBER_INT);
		return $cleaned;
	}
}
