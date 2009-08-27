<?php 
/* SVN FILE: $Id$ */
/* WageringMoneylinesController Test cases generated on: 2009-08-20 15:08:19 : 1250799259*/
App::import('Controller', 'WageringMoneylines');

class TestWageringMoneylines extends WageringMoneylinesController {
	var $autoRender = false;
}

class WageringMoneylinesControllerTest extends CakeTestCase {
	var $WageringMoneylines = null;

	function startTest() {
		$this->WageringMoneylines = new TestWageringMoneylines();
		$this->WageringMoneylines->constructClasses();
	}

	function testWageringMoneylinesControllerInstance() {
		$this->assertTrue(is_a($this->WageringMoneylines, 'WageringMoneylinesController'));
	}

	function endTest() {
		unset($this->WageringMoneylines);
	}
}
?>