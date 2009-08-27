<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballPassingStatsController Test cases generated on: 2009-08-20 15:08:29 : 1250798909*/
App::import('Controller', 'AmericanFootballPassingStats');

class TestAmericanFootballPassingStats extends AmericanFootballPassingStatsController {
	var $autoRender = false;
}

class AmericanFootballPassingStatsControllerTest extends CakeTestCase {
	var $AmericanFootballPassingStats = null;

	function startTest() {
		$this->AmericanFootballPassingStats = new TestAmericanFootballPassingStats();
		$this->AmericanFootballPassingStats->constructClasses();
	}

	function testAmericanFootballPassingStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballPassingStats, 'AmericanFootballPassingStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballPassingStats);
	}
}
?>