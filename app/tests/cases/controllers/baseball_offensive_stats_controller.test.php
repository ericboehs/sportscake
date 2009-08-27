<?php 
/* SVN FILE: $Id$ */
/* BaseballOffensiveStatsController Test cases generated on: 2009-08-20 15:08:25 : 1250798965*/
App::import('Controller', 'BaseballOffensiveStats');

class TestBaseballOffensiveStats extends BaseballOffensiveStatsController {
	var $autoRender = false;
}

class BaseballOffensiveStatsControllerTest extends CakeTestCase {
	var $BaseballOffensiveStats = null;

	function startTest() {
		$this->BaseballOffensiveStats = new TestBaseballOffensiveStats();
		$this->BaseballOffensiveStats->constructClasses();
	}

	function testBaseballOffensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballOffensiveStats, 'BaseballOffensiveStatsController'));
	}

	function endTest() {
		unset($this->BaseballOffensiveStats);
	}
}
?>