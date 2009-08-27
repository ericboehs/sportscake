<?php 
/* SVN FILE: $Id$ */
/* IceHockeyOffensiveStatsController Test cases generated on: 2009-08-20 15:08:45 : 1250799105*/
App::import('Controller', 'IceHockeyOffensiveStats');

class TestIceHockeyOffensiveStats extends IceHockeyOffensiveStatsController {
	var $autoRender = false;
}

class IceHockeyOffensiveStatsControllerTest extends CakeTestCase {
	var $IceHockeyOffensiveStats = null;

	function startTest() {
		$this->IceHockeyOffensiveStats = new TestIceHockeyOffensiveStats();
		$this->IceHockeyOffensiveStats->constructClasses();
	}

	function testIceHockeyOffensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyOffensiveStats, 'IceHockeyOffensiveStatsController'));
	}

	function endTest() {
		unset($this->IceHockeyOffensiveStats);
	}
}
?>