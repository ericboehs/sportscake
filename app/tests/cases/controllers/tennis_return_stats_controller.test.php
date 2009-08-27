<?php 
/* SVN FILE: $Id$ */
/* TennisReturnStatsController Test cases generated on: 2009-08-20 15:08:11 : 1250799251*/
App::import('Controller', 'TennisReturnStats');

class TestTennisReturnStats extends TennisReturnStatsController {
	var $autoRender = false;
}

class TennisReturnStatsControllerTest extends CakeTestCase {
	var $TennisReturnStats = null;

	function startTest() {
		$this->TennisReturnStats = new TestTennisReturnStats();
		$this->TennisReturnStats->constructClasses();
	}

	function testTennisReturnStatsControllerInstance() {
		$this->assertTrue(is_a($this->TennisReturnStats, 'TennisReturnStatsController'));
	}

	function endTest() {
		unset($this->TennisReturnStats);
	}
}
?>