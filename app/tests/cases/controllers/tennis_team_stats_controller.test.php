<?php 
/* SVN FILE: $Id$ */
/* TennisTeamStatsController Test cases generated on: 2009-08-20 15:08:17 : 1250799257*/
App::import('Controller', 'TennisTeamStats');

class TestTennisTeamStats extends TennisTeamStatsController {
	var $autoRender = false;
}

class TennisTeamStatsControllerTest extends CakeTestCase {
	var $TennisTeamStats = null;

	function startTest() {
		$this->TennisTeamStats = new TestTennisTeamStats();
		$this->TennisTeamStats->constructClasses();
	}

	function testTennisTeamStatsControllerInstance() {
		$this->assertTrue(is_a($this->TennisTeamStats, 'TennisTeamStatsController'));
	}

	function endTest() {
		unset($this->TennisTeamStats);
	}
}
?>