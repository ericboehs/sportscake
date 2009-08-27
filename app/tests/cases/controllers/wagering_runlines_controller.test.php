<?php 
/* SVN FILE: $Id$ */
/* WageringRunlinesController Test cases generated on: 2009-08-20 15:08:24 : 1250799264*/
App::import('Controller', 'WageringRunlines');

class TestWageringRunlines extends WageringRunlinesController {
	var $autoRender = false;
}

class WageringRunlinesControllerTest extends CakeTestCase {
	var $WageringRunlines = null;

	function startTest() {
		$this->WageringRunlines = new TestWageringRunlines();
		$this->WageringRunlines->constructClasses();
	}

	function testWageringRunlinesControllerInstance() {
		$this->assertTrue(is_a($this->WageringRunlines, 'WageringRunlinesController'));
	}

	function endTest() {
		unset($this->WageringRunlines);
	}
}
?>