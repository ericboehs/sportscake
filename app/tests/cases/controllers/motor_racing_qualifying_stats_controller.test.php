<?php 
/* SVN FILE: $Id$ */
/* MotorRacingQualifyingStatsController Test cases generated on: 2009-08-20 15:08:37 : 1250799157*/
App::import('Controller', 'MotorRacingQualifyingStats');

class TestMotorRacingQualifyingStats extends MotorRacingQualifyingStatsController {
	var $autoRender = false;
}

class MotorRacingQualifyingStatsControllerTest extends CakeTestCase {
	var $MotorRacingQualifyingStats = null;

	function startTest() {
		$this->MotorRacingQualifyingStats = new TestMotorRacingQualifyingStats();
		$this->MotorRacingQualifyingStats->constructClasses();
	}

	function testMotorRacingQualifyingStatsControllerInstance() {
		$this->assertTrue(is_a($this->MotorRacingQualifyingStats, 'MotorRacingQualifyingStatsController'));
	}

	function endTest() {
		unset($this->MotorRacingQualifyingStats);
	}
}
?>