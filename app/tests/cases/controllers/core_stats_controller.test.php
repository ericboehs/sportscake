<?php 
/* SVN FILE: $Id$ */
/* CoreStatsController Test cases generated on: 2009-08-20 15:08:42 : 1250798982*/
App::import('Controller', 'CoreStats');

class TestCoreStats extends CoreStatsController {
	var $autoRender = false;
}

class CoreStatsControllerTest extends CakeTestCase {
	var $CoreStats = null;

	function startTest() {
		$this->CoreStats = new TestCoreStats();
		$this->CoreStats->constructClasses();
	}

	function testCoreStatsControllerInstance() {
		$this->assertTrue(is_a($this->CoreStats, 'CoreStatsController'));
	}

	function endTest() {
		unset($this->CoreStats);
	}
}
?>