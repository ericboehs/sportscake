<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballSacksAgainstStatsController Test cases generated on: 2009-08-20 15:08:57 : 1250798937*/
App::import('Controller', 'AmericanFootballSacksAgainstStats');

class TestAmericanFootballSacksAgainstStats extends AmericanFootballSacksAgainstStatsController {
	var $autoRender = false;
}

class AmericanFootballSacksAgainstStatsControllerTest extends CakeTestCase {
	var $AmericanFootballSacksAgainstStats = null;

	function startTest() {
		$this->AmericanFootballSacksAgainstStats = new TestAmericanFootballSacksAgainstStats();
		$this->AmericanFootballSacksAgainstStats->constructClasses();
	}

	function testAmericanFootballSacksAgainstStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballSacksAgainstStats, 'AmericanFootballSacksAgainstStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballSacksAgainstStats);
	}
}
?>