<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballFumblesStatsController Test cases generated on: 2009-08-20 15:08:25 : 1250798905*/
App::import('Controller', 'AmericanFootballFumblesStats');

class TestAmericanFootballFumblesStats extends AmericanFootballFumblesStatsController {
	var $autoRender = false;
}

class AmericanFootballFumblesStatsControllerTest extends CakeTestCase {
	var $AmericanFootballFumblesStats = null;

	function startTest() {
		$this->AmericanFootballFumblesStats = new TestAmericanFootballFumblesStats();
		$this->AmericanFootballFumblesStats->constructClasses();
	}

	function testAmericanFootballFumblesStatsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballFumblesStats, 'AmericanFootballFumblesStatsController'));
	}

	function endTest() {
		unset($this->AmericanFootballFumblesStats);
	}
}
?>