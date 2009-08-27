<?php 
/* SVN FILE: $Id$ */
/* IceHockeyPlayerStatsController Test cases generated on: 2009-08-20 15:08:48 : 1250799108*/
App::import('Controller', 'IceHockeyPlayerStats');

class TestIceHockeyPlayerStats extends IceHockeyPlayerStatsController {
	var $autoRender = false;
}

class IceHockeyPlayerStatsControllerTest extends CakeTestCase {
	var $IceHockeyPlayerStats = null;

	function startTest() {
		$this->IceHockeyPlayerStats = new TestIceHockeyPlayerStats();
		$this->IceHockeyPlayerStats->constructClasses();
	}

	function testIceHockeyPlayerStatsControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyPlayerStats, 'IceHockeyPlayerStatsController'));
	}

	function endTest() {
		unset($this->IceHockeyPlayerStats);
	}
}
?>