<?php

/**
 * Class SampleTest
 *
 * @package Wordpress_Tdd_Plugin
 */

/**
 * Sample test case.
 */
class TestSample extends WP_UnitTestCase
{

	/**
	 * Test shortcode output
	 */
	public function test_tdd_shortcode()
	{
		add_option('tdd_font', 'monospaced');
		add_option('tdd_color', 'red');

		$actual = create_shorcode_tdd_plugin(array(), 'hola');
		$expected = '<div style="font-family: monospaced; color: red; font-weight: normal">hola</div>';

		$this->assertEquals($actual, $expected);
		$this->assertTrue(false); // Just to verify phpunit
	}
}
