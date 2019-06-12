<?php

namespace Hatamiarash7\Utils\Test;

use Hatamiarash7\Utils\LaravelUtilsServiceProvider;
use Hatamiarash7\Utils\StringUtils;
use Orchestra\Testbench\TestCase as Orchestra;

class FunctionsTest extends Orchestra
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
		$utils = new StringUtils();

		$this->assertEquals("Lorem dolor amet, adipiscing .", $utils->removeStrings(["ipsum", "consectetur", "sit", "elit"], "Lorem ipsum dolor sit amet, consectetur adipiscing elit."));
	}
}
