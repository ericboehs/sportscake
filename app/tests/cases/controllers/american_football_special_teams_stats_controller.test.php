<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballSpecialTeamsStatsController Test cases generated on: 2009-08-20 15:08:00 : 1250798940*/
App::import('Controller', 'AmericanFootballSpecialTeamsStats');

class TestAmericanFootballSpecialTeamsStats extends AmericanFootballSpecialTeamsStatsController {
	var $autoRender = false;
}

class AmericanFootballSpecialTeamsStatsControllerTest extends CakeTestCase {
	var $AmericanFootballSpecialTeamsStats = null;

	function startTest() {
		$this->AmericanFootballSpecialTeamsStats = new TestAmericanFootballSpecialTeamsStats();
		$this->AmericanFootballSpecialTeamsStats->constructClasses();
	}

	function testAmericanFootballSpecialTeamsStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballSpecialTeamsStats, 'AmericanFootballSpecialTeamsStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballSpecialTeamsStats);
	}
}
?>