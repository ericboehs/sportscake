<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballPenaltiesStatsController Test cases generated on: 2009-08-20 15:08:30 : 1250798910*/
App::import('Controller', 'AmericanFootballPenaltiesStats');

class TestAmericanFootballPenaltiesStats extends AmericanFootballPenaltiesStatsController {
	var $autoRender = false;
}

class AmericanFootballPenaltiesStatsControllerTest extends CakeTestCase {
	var $AmericanFootballPenaltiesStats = null;

	function startTest() {
		$this->AmericanFootballPenaltiesStats = new TestAmericanFootballPenaltiesStats();
		$this->AmericanFootballPenaltiesStats->constructClasses();
	}

	function testAmericanFootballPenaltiesStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballPenaltiesStats, 'AmericanFootballPenaltiesStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballPenaltiesStats);
	}
}
?>