<?php

namespace Hatamiarash7\Utils\Test;

use Hatamiarash7\Utils\LaravelUtilsServiceProvider;
use Hatamiarash7\Utils\StringUtils;
use Orchestra\Testbench\TestCase as Orchestra;

class StringUtilsTest extends Orchestra
{
	/**
	 * add the package provider
	 *
	 * @param $app
	 * @return array
	 */
	protected function getPackageProviders($app)
	{
		return [LaravelUtilsServiceProvider::class];
	}

	/** @test */
	public function test_functions()
	{
		$this->assertEquals("Lorem dolor amet, adipiscing.", StringUtils::removeWords(["ipsum", "consectetur", "sit", "elit"], "Lorem ipsum dolor sit amet, consectetur adipiscing elit."));
		$this->assertEquals(9, StringUtils::len("abcd 1234"));
		$this->assertEquals(4, StringUtils::len("سلام"));
		$this->assertEquals("abcd", StringUtils::lowercase("ABcD"));
		$this->assertEquals("ABCD", StringUtils::uppercase("abCd"));
		$this->assertEquals("ABCD", StringUtils::uppercase("abCd"));
		$this->assertEquals(3, StringUtils::subCount("hello world hello world hello", "hello"));
	}
}
