<?php 
/* SVN FILE: $Id$ */
/* TennisServiceStatsController Test cases generated on: 2009-08-20 15:08:13 : 1250799253*/
App::import('Controller', 'TennisServiceStats');

class TestTennisServiceStats extends TennisServiceStatsController {
	var $autoRender = false;
}

class TennisServiceStatsControllerTest extends CakeTestCase {
	var $TennisServiceStats = null;

	function startTest() {
		$this->TennisServiceStats = new TestTennisServiceStats();
		$this->TennisServiceStats->constructClasses();
	}

	function testTennisServiceStatsControllerInstance() {
		$this->assertTrue(is_a($this->TennisServiceStats, 'TennisServiceStatsController'));
	}

	function endTest() {
		unset($this->TennisServiceStats);
	}
}
?>