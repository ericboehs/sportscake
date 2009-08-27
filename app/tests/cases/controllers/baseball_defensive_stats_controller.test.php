<?php 
/* SVN FILE: $Id$ */
/* BaseballDefensiveStatsController Test cases generated on: 2009-08-20 15:08:22 : 1250798962*/
App::import('Controller', 'BaseballDefensiveStats');

class TestBaseballDefensiveStats extends BaseballDefensiveStatsController {
	var $autoRender = false;
}

class BaseballDefensiveStatsControllerTest extends CakeTestCase {
	var $BaseballDefensiveStats = null;

	function startTest() {
		$this->BaseballDefensiveStats = new TestBaseballDefensiveStats();
		$this->BaseballDefensiveStats->constructClasses();
	}

	function testBaseballDefensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballDefensiveStats, 'BaseballDefensiveStatsController'));
	}

	function endTest() {
		unset($this->BaseballDefensiveStats);
	}
}
?>