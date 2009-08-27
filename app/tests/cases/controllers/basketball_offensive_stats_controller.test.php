<?php 
/* SVN FILE: $Id$ */
/* BasketballOffensiveStatsController Test cases generated on: 2009-08-20 15:08:33 : 1250798973*/
App::import('Controller', 'BasketballOffensiveStats');

class TestBasketballOffensiveStats extends BasketballOffensiveStatsController {
	var $autoRender = false;
}

class BasketballOffensiveStatsControllerTest extends CakeTestCase {
	var $BasketballOffensiveStats = null;

	function startTest() {
		$this->BasketballOffensiveStats = new TestBasketballOffensiveStats();
		$this->BasketballOffensiveStats->constructClasses();
	}

	function testBasketballOffensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->BasketballOffensiveStats, 'BasketballOffensiveStatsController'));
	}

	function endTest() {
		unset($this->BasketballOffensiveStats);
	}
}
?>