<?php 
/* SVN FILE: $Id$ */
/* TennisPlayerStatsController Test cases generated on: 2009-08-20 15:08:09 : 1250799249*/
App::import('Controller', 'TennisPlayerStats');

class TestTennisPlayerStats extends TennisPlayerStatsController {
	var $autoRender = false;
}

class TennisPlayerStatsControllerTest extends CakeTestCase {
	var $TennisPlayerStats = null;

	function startTest() {
		$this->TennisPlayerStats = new TestTennisPlayerStats();
		$this->TennisPlayerStats->constructClasses();
	}

	function testTennisPlayerStatsControllerInstance() {
		$this->assertTrue(is_a($this->TennisPlayerStats, 'TennisPlayerStatsController'));
	}

	function endTest() {
		unset($this->TennisPlayerStats);
	}
}
?>