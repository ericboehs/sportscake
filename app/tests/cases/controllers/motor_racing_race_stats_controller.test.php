<?php 
/* SVN FILE: $Id$ */
/* MotorRacingRaceStatsController Test cases generated on: 2009-08-20 15:08:39 : 1250799159*/
App::import('Controller', 'MotorRacingRaceStats');

class TestMotorRacingRaceStats extends MotorRacingRaceStatsController {
	var $autoRender = false;
}

class MotorRacingRaceStatsControllerTest extends CakeTestCase {
	var $MotorRacingRaceStats = null;

	function startTest() {
		$this->MotorRacingRaceStats = new TestMotorRacingRaceStats();
		$this->MotorRacingRaceStats->constructClasses();
	}

	function testMotorRacingRaceStatsControllerInstance() {
		$this->assertTrue(is_a($this->MotorRacingRaceStats, 'MotorRacingRaceStatsController'));
	}

	function endTest() {
		unset($this->MotorRacingRaceStats);
	}
}
?>