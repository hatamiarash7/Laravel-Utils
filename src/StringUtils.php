<?php

namespace Hatamiarash7\Utils;

/**
 * Class StringUtils
 *
 * @package Hatamiarash7\Utils
 */
class StringUtils
{
	/**
	 * Default charset is UTF-8
	 *
	 * @var string
	 */
	public static $encoding = 'UTF-8';

	/**
	 * Remove given words from a string
	 *
	 * @param $words
	 * @param $string
	 * @return mixed
	 */
	public static function removeWords($words, $string): string
	{
		foreach ($words as $word) {
			$string = str_replace($word, "", $string);
		}

		$string = str_replace("  ", " ", $string);
		$string = str_replace(" .", ".", $string);

		return $string; // @codeCoverageIgnore
	}

	/**
	 * Check is mbstring loaded
	 *
	 * @return bool
	 */
	public static function isMBString(): bool
	{
		static $isLoaded;
		if (null === $isLoaded) {
			$isLoaded = extension_loaded('mbstring');
			if ($isLoaded) {
				mb_internal_encoding(self::$encoding);
			}
		}
		return $isLoaded;
	}

	/**
	 * Get string length
	 *
	 * @param $string
	 * @return int
	 */
	public static function len($string): int
	{
		if (self::isMBString()) {
			return mb_strlen($string, self::$encoding);
		}
		return strlen($string); // @codeCoverageIgnore
	}

	/**
	 * Make a string lowercase
	 *
	 * @param string $string
	 * @return string
	 */
	public static function lowercase($string): string
	{
		if (self::isMBString()) {
			return mb_strtolower($string, self::$encoding);
		}
		return strtolower($string); // @codeCoverageIgnore
	}

	/**
	 * Make a string uppercase
	 *
	 * @param string $string
	 * @return string
	 *
	 * @SuppressWarnings(PHPMD.ShortMethodName)
	 */
	public static function uppercase($string): string
	{
		if (self::isMBString()) {
			return mb_strtoupper($string, self::$encoding);
		}
		return strtoupper($string); // @codeCoverageIgnore
	}

	/**
	 * Count the number of substring occurrences
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return int
	 */
	public static function subCount($haystack, $needle): int
	{
		if (self::isMBString()) {
			return mb_substr_count($haystack, $needle, self::$encoding);
		}
		return substr_count($haystack, $needle); // @codeCoverageIgnore
	}

	/**
	 * Summarize a string by limit. You can use end string for summarized string.
	 *
	 * @param $content
	 * @param int $max_characters
	 * @param string $append
	 * @return string
	 */
	public static function summarize($content, $max_characters = 100, $append = " ...")
	{
		if (strlen($content) > $max_characters) {
			$delimiter = "~\n~";
			$content = substr($content, 0, strpos(wordwrap($content, $max_characters, $delimiter), $delimiter)) . $append;
		}

		return $content;
	}

	/**
	 * Convert english letters to persian
	 *
	 * @param $expression
	 * @return string
	 */
	public static function toPersian($expression)
	{
		$array = ['0' => '۰', '1' => '۱', '2' => '۲', '3' => '۳', '4' => '۴', '5' => '۵', '6' => '۶', '7' => '۷', '8' => '۸', '9' => '۹'];
		return strtr($expression, $array);
	}

	/**
	 * Convert numeral string to persian price format
	 *
	 * @param $expression
	 * @return string
	 */
	public static function toPersianPrice($expression)
	{
		$array = ['0' => '۰', '1' => '۱', '2' => '۲', '3' => '۳', '4' => '۴', '5' => '۵', '6' => '۶', '7' => '۷', '8' => '۸', '9' => '۹'];
		return strtr(number_format($expression), $array) . ' تومان';
	}
}
