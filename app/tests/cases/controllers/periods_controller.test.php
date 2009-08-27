<?php 
/* SVN FILE: $Id$ */
/* PeriodsController Test cases generated on: 2009-08-20 15:08:52 : 1250799172*/
App::import('Controller', 'Periods');

class TestPeriods extends PeriodsController {
	var $autoRender = false;
}

class PeriodsControllerTest extends CakeTestCase {
	var $Periods = null;

	function startTest() {
		$this->Periods = new TestPeriods();
		$this->Periods->constructClasses();
	}

	function testPeriodsControllerInstance() {
		$this->assertTrue(is_a($this->Periods, 'PeriodsController'));
	}

	function endTest() {
		unset($this->Periods);
	}
}
?>