<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballScoringStatsController Test cases generated on: 2009-08-20 15:08:58 : 1250798938*/
App::import('Controller', 'AmericanFootballScoringStats');

class TestAmericanFootballScoringStats extends AmericanFootballScoringStatsController {
	var $autoRender = false;
}

class AmericanFootballScoringStatsControllerTest extends CakeTestCase {
	var $AmericanFootballScoringStats = null;

	function startTest() {
		$this->AmericanFootballScoringStats = new TestAmericanFootballScoringStats();
		$this->AmericanFootballScoringStats->constructClasses();
	}

	function testAmericanFootballScoringStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballScoringStats, 'AmericanFootballScoringStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballScoringStats);
	}
}
?>