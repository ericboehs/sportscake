<?php 
/* SVN FILE: $Id$ */
/* BasketballTeamStatsController Test cases generated on: 2009-08-20 15:08:37 : 1250798977*/
App::import('Controller', 'BasketballTeamStats');

class TestBasketballTeamStats extends BasketballTeamStatsController {
	var $autoRender = false;
}

class BasketballTeamStatsControllerTest extends CakeTestCase {
	var $BasketballTeamStats = null;

	function startTest() {
		$this->BasketballTeamStats = new TestBasketballTeamStats();
		$this->BasketballTeamStats->constructClasses();
	}

	function testBasketballTeamStatsControllerInstance() {
		$this->assertTrue(is_a($this->BasketballTeamStats, 'BasketballTeamStatsController'));
	}

	function endTest() {
		unset($this->BasketballTeamStats);
	}
}
?>