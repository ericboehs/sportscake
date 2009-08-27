<?php 
/* SVN FILE: $Id$ */
/* SoccerDefensiveStatsController Test cases generated on: 2009-08-20 15:08:25 : 1250799205*/
App::import('Controller', 'SoccerDefensiveStats');

class TestSoccerDefensiveStats extends SoccerDefensiveStatsController {
	var $autoRender = false;
}

class SoccerDefensiveStatsControllerTest extends CakeTestCase {
	var $SoccerDefensiveStats = null;

	function startTest() {
		$this->SoccerDefensiveStats = new TestSoccerDefensiveStats();
		$this->SoccerDefensiveStats->constructClasses();
	}

	function testSoccerDefensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerDefensiveStats, 'SoccerDefensiveStatsController'));
	}

	function endTest() {
		unset($this->SoccerDefensiveStats);
	}
}
?>