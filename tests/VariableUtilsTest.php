<?php

namespace Hatamiarash7\Utils\Test;

use Hatamiarash7\Utils\LaravelUtilsServiceProvider;
use Hatamiarash7\Utils\VariableUtils;
use Orchestra\Testbench\TestCase as Orchestra;

class VariableUtilsTest extends Orchestra
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
		$this->assertEquals(123, VariableUtils::int("123"));
		$this->assertEquals(123, VariableUtils::int("a123"));
		$this->assertEquals(123, VariableUtils::int("at12e3h"));

		$this->assertEquals(123, VariableUtils::digits("at12e3h"));
	}
}
