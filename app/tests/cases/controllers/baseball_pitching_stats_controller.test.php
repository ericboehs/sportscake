<?php 
/* SVN FILE: $Id$ */
/* BaseballPitchingStatsController Test cases generated on: 2009-08-20 15:08:27 : 1250798967*/
App::import('Controller', 'BaseballPitchingStats');

class TestBaseballPitchingStats extends BaseballPitchingStatsController {
	var $autoRender = false;
}

class BaseballPitchingStatsControllerTest extends CakeTestCase {
	var $BaseballPitchingStats = null;

	function startTest() {
		$this->BaseballPitchingStats = new TestBaseballPitchingStats();
		$this->BaseballPitchingStats->constructClasses();
	}

	function testBaseballPitchingStatsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballPitchingStats, 'BaseballPitchingStatsController'));
	}

	function endTest() {
		unset($this->BaseballPitchingStats);
	}
}
?>