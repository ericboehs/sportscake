<?php 
/* SVN FILE: $Id$ */
/* SoccerFoulStatsController Test cases generated on: 2009-08-20 15:08:29 : 1250799209*/
App::import('Controller', 'SoccerFoulStats');

class TestSoccerFoulStats extends SoccerFoulStatsController {
	var $autoRender = false;
}

class SoccerFoulStatsControllerTest extends CakeTestCase {
	var $SoccerFoulStats = null;

	function startTest() {
		$this->SoccerFoulStats = new TestSoccerFoulStats();
		$this->SoccerFoulStats->constructClasses();
	}

	function testSoccerFoulStatsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerFoulStats, 'SoccerFoulStatsController'));
	}

	function endTest() {
		unset($this->SoccerFoulStats);
	}
}
?>