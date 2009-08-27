<?php 
/* SVN FILE: $Id$ */
/* BasketballDefensiveStatsController Test cases generated on: 2009-08-20 15:08:29 : 1250798969*/
App::import('Controller', 'BasketballDefensiveStats');

class TestBasketballDefensiveStats extends BasketballDefensiveStatsController {
	var $autoRender = false;
}

class BasketballDefensiveStatsControllerTest extends CakeTestCase {
	var $BasketballDefensiveStats = null;

	function startTest() {
		$this->BasketballDefensiveStats = new TestBasketballDefensiveStats();
		$this->BasketballDefensiveStats->constructClasses();
	}

	function testBasketballDefensiveStatsControllerInstance() {
		$this->assertTrue(is_a($this->BasketballDefensiveStats, 'BasketballDefensiveStatsController'));
	}

	function endTest() {
		unset($this->BasketballDefensiveStats);
	}
}
?>