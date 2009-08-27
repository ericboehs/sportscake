<?php 
/* SVN FILE: $Id$ */
/* TennisSetStatsController Test cases generated on: 2009-08-20 15:08:15 : 1250799255*/
App::import('Controller', 'TennisSetStats');

class TestTennisSetStats extends TennisSetStatsController {
	var $autoRender = false;
}

class TennisSetStatsControllerTest extends CakeTestCase {
	var $TennisSetStats = null;

	function startTest() {
		$this->TennisSetStats = new TestTennisSetStats();
		$this->TennisSetStats->constructClasses();
	}

	function testTennisSetStatsControllerInstance() {
		$this->assertTrue(is_a($this->TennisSetStats, 'TennisSetStatsController'));
	}

	function endTest() {
		unset($this->TennisSetStats);
	}
}
?>