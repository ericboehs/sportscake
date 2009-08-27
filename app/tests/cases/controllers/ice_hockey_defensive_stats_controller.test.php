<?php 
/* SVN FILE: $Id$ */
/* IceHockeyDefensiveStatsController Test cases generated on: 2009-08-20 15:08:41 : 1250799101*/
App::import('Controller', 'IceHockeyDefensiveStats');

class TestIceHockeyDefensiveStats extends IceHockeyDefensiveStatsController {
	var $autoRender = false;
}

class IceHockeyDefensiveStatsControllerTest extends CakeTestCase {
	var $IceHockeyDefensiveStats = null;

	function startTest() {
		$this->IceHockeyDefensiveStats = new TestIceHockeyDefensiveStats();
		$this->IceHockeyDefensiveStats->constructClasses();
	}

	function testIceHockeyDefensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyDefensiveStats, 'IceHockeyDefensiveStatsController'));
	}

	function endTest() {
		unset($this->IceHockeyDefensiveStats);
	}
}
?>