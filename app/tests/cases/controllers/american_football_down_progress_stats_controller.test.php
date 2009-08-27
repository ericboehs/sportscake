<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballDownProgressStatsController Test cases generated on: 2009-08-20 15:08:21 : 1250798901*/
App::import('Controller', 'AmericanFootballDownProgressStats');

class TestAmericanFootballDownProgressStats extends AmericanFootballDownProgressStatsController {
	var $autoRender = false;
}

class AmericanFootballDownProgressStatsControllerTest extends CakeTestCase {
	var $AmericanFootballDownProgressStats = null;

	function startTest() {
		$this->AmericanFootballDownProgressStats = new TestAmericanFootballDownProgressStats();
		$this->AmericanFootballDownProgressStats->constructClasses();
	}

	function testAmericanFootballDownProgressStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballDownProgressStats, 'AmericanFootballDownProgressStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballDownProgressStats);
	}
}
?>