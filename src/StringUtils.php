<?php

namespace Hatamiarash7\Utils;

class StringUtils
{
	public function removeStrings($words, $string)
	{
		foreach ($words as $word) {
			$string = str_replace($word, "", $string);
		}

		$string = str_replace("  ", " ", $string);

		return $string;
	}
}
