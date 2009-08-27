<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballDefensiveStatsController Test cases generated on: 2009-08-20 15:08:18 : 1250798898*/
App::import('Controller', 'AmericanFootballDefensiveStats');

class TestAmericanFootballDefensiveStats extends AmericanFootballDefensiveStatsController {
	var $autoRender = false;
}

class AmericanFootballDefensiveStatsControllerTest extends CakeTestCase {
	var $AmericanFootballDefensiveStats = null;

	function startTest() {
		$this->AmericanFootballDefensiveStats = new TestAmericanFootballDefensiveStats();
		$this->AmericanFootballDefensiveStats->constructClasses();
	}

	function testAmericanFootballDefensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballDefensiveStats, 'AmericanFootballDefensiveStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballDefensiveStats);
	}
}
?>