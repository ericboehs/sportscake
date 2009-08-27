<?php 
/* SVN FILE: $Id$ */
/* StatsController Test cases generated on: 2009-08-20 15:08:43 : 1250799223*/
App::import('Controller', 'Stats');

class TestStats extends StatsController {
	var $autoRender = false;
}

class StatsControllerTest extends CakeTestCase {
	var $Stats = null;

	function startTest() {
		$this->Stats = new TestStats();
		$this->Stats->constructClasses();
	}

	function testStatsControllerInstance() {
		$this->assertTrue(is_a($this->Stats, 'StatsController'));
	}

	function endTest() {
		unset($this->Stats);
	}
}
?>