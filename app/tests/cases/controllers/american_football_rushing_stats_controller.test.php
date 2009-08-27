<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballRushingStatsController Test cases generated on: 2009-08-20 15:08:35 : 1250798915*/
App::import('Controller', 'AmericanFootballRushingStats');

class TestAmericanFootballRushingStats extends AmericanFootballRushingStatsController {
	var $autoRender = false;
}

class AmericanFootballRushingStatsControllerTest extends CakeTestCase {
	var $AmericanFootballRushingStats = null;

	function startTest() {
		$this->AmericanFootballRushingStats = new TestAmericanFootballRushingStats();
		$this->AmericanFootballRushingStats->constructClasses();
	}

	function testAmericanFootballRushingStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballRushingStats, 'AmericanFootballRushingStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballRushingStats);
	}
}
?>