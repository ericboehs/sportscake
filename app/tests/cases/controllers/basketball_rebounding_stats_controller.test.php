<?php 
/* SVN FILE: $Id$ */
/* BasketballReboundingStatsController Test cases generated on: 2009-08-20 15:08:34 : 1250798974*/
App::import('Controller', 'BasketballReboundingStats');

class TestBasketballReboundingStats extends BasketballReboundingStatsController {
	var $autoRender = false;
}

class BasketballReboundingStatsControllerTest extends CakeTestCase {
	var $BasketballReboundingStats = null;

	function startTest() {
		$this->BasketballReboundingStats = new TestBasketballReboundingStats();
		$this->BasketballReboundingStats->constructClasses();
	}

	function testBasketballReboundingStatsControllerInstance() {
		$this->assertTrue(is_a($this->BasketballReboundingStats, 'BasketballReboundingStatsController'));
	}

	function endTest() {
		unset($this->BasketballReboundingStats);
	}
}
?>