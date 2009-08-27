<?php 
/* SVN FILE: $Id$ */
/* PenaltyStatsController Test cases generated on: 2009-08-20 15:08:49 : 1250799169*/
App::import('Controller', 'PenaltyStats');

class TestPenaltyStats extends PenaltyStatsController {
	var $autoRender = false;
}

class PenaltyStatsControllerTest extends CakeTestCase {
	var $PenaltyStats = null;

	function startTest() {
		$this->PenaltyStats = new TestPenaltyStats();
		$this->PenaltyStats->constructClasses();
	}

	function testPenaltyStatsControllerInstance() {
		$this->assertTrue(is_a($this->PenaltyStats, 'PenaltyStatsController'));
	}

	function endTest() {
		unset($this->PenaltyStats);
	}
}
?>