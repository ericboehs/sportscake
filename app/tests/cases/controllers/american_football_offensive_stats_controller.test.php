<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballOffensiveStatsController Test cases generated on: 2009-08-20 15:08:27 : 1250798907*/
App::import('Controller', 'AmericanFootballOffensiveStats');

class TestAmericanFootballOffensiveStats extends AmericanFootballOffensiveStatsController {
	var $autoRender = false;
}

class AmericanFootballOffensiveStatsControllerTest extends CakeTestCase {
	var $AmericanFootballOffensiveStats = null;

	function startTest() {
		$this->AmericanFootballOffensiveStats = new TestAmericanFootballOffensiveStats();
		$this->AmericanFootballOffensiveStats->constructClasses();
	}

	function testAmericanFootballOffensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballOffensiveStats, 'AmericanFootballOffensiveStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballOffensiveStats);
	}
}
?>