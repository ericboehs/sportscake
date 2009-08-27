<?php 
/* SVN FILE: $Id$ */
/* SubPeriodsController Test cases generated on: 2009-08-20 15:08:47 : 1250799227*/
App::import('Controller', 'SubPeriods');

class TestSubPeriods extends SubPeriodsController {
	var $autoRender = false;
}

class SubPeriodsControllerTest extends CakeTestCase {
	var $SubPeriods = null;

	function startTest() {
		$this->SubPeriods = new TestSubPeriods();
		$this->SubPeriods->constructClasses();
	}

	function testSubPeriodsControllerInstance() {
		$this->assertTrue(is_a($this->SubPeriods, 'SubPeriodsController'));
	}

	function endTest() {
		unset($this->SubPeriods);
	}
}
?>