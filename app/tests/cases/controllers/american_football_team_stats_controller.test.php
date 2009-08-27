<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballTeamStatsController Test cases generated on: 2009-08-20 15:08:01 : 1250798941*/
App::import('Controller', 'AmericanFootballTeamStats');

class TestAmericanFootballTeamStats extends AmericanFootballTeamStatsController {
	var $autoRender = false;
}

class AmericanFootballTeamStatsControllerTest extends CakeTestCase {
	var $AmericanFootballTeamStats = null;

	function startTest() {
		$this->AmericanFootballTeamStats = new TestAmericanFootballTeamStats();
		$this->AmericanFootballTeamStats->constructClasses();
	}

	function testAmericanFootballTeamStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballTeamStats, 'AmericanFootballTeamStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballTeamStats);
	}
}
?>