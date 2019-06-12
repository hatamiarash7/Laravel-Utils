<?php

namespace Hatamiarash7\Utils\Test;

use Hatamiarash7\Utils\ArrayUtils;
use Hatamiarash7\Utils\LaravelUtilsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class ArrayUtilsTest extends Orchestra
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
		$sampleArray = [
			'1' => 'a',
			'2' => 'b',
			'3' => 'a'
		];

		$this->assertEquals(['1' => 'b', '0' => 'a'], ArrayUtils::unique($sampleArray));
		$this->assertEquals(['1' => 'a', '2' => 'b'], ArrayUtils::unique($sampleArray, true));

		$this->assertEquals(true, ArrayUtils::key('1', $sampleArray));
		$this->assertEquals(false, ArrayUtils::key('4', $sampleArray));
		$this->assertEquals('a', ArrayUtils::key('1', $sampleArray, true));
		$this->assertEquals(null, ArrayUtils::key('4', $sampleArray, true));

		$this->assertEquals(true, ArrayUtils::exists('a', $sampleArray));
		$this->assertEquals(false, ArrayUtils::exists('c', $sampleArray));
		$this->assertEquals('1', ArrayUtils::exists('a', $sampleArray, true));
		$this->assertEquals(null, ArrayUtils::exists('c', $sampleArray, true));

		$sampleArray = [
			'1' => 'a',
			'2' => 'b',
			'3' => 'c'
		];

		$this->assertEquals('a', ArrayUtils::first($sampleArray));
		$this->assertEquals('c', ArrayUtils::last($sampleArray));

		$this->assertEquals('1', ArrayUtils::firstKey($sampleArray));
		$this->assertEquals('3', ArrayUtils::lastKey($sampleArray));

		$this->assertEquals('1', ArrayUtils::search($sampleArray, 'a'));
		$this->assertEquals(false, ArrayUtils::search($sampleArray, 'd'));

		$this->assertEquals(['pre_1' => 'a', 'pre_2' => 'b', 'pre_3' => 'c'], ArrayUtils::addPrefix($sampleArray, 'pre_'));
	}
}
