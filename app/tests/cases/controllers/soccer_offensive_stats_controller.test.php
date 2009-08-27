<?php 
/* SVN FILE: $Id$ */
/* SoccerOffensiveStatsController Test cases generated on: 2009-08-20 15:08:31 : 1250799211*/
App::import('Controller', 'SoccerOffensiveStats');

class TestSoccerOffensiveStats extends SoccerOffensiveStatsController {
	var $autoRender = false;
}

class SoccerOffensiveStatsControllerTest extends CakeTestCase {
	var $SoccerOffensiveStats = null;

	function startTest() {
		$this->SoccerOffensiveStats = new TestSoccerOffensiveStats();
		$this->SoccerOffensiveStats->constructClasses();
	}

	function testSoccerOffensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerOffensiveStats, 'SoccerOffensiveStatsController'));
	}

	function endTest() {
		unset($this->SoccerOffensiveStats);
	}
}
?>