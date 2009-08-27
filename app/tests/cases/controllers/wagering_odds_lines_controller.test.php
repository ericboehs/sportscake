<?php 
/* SVN FILE: $Id$ */
/* WageringOddsLinesController Test cases generated on: 2009-08-20 15:08:21 : 1250799261*/
App::import('Controller', 'WageringOddsLines');

class TestWageringOddsLines extends WageringOddsLinesController {
	var $autoRender = false;
}

class WageringOddsLinesControllerTest extends CakeTestCase {
	var $WageringOddsLines = null;

	function startTest() {
		$this->WageringOddsLines = new TestWageringOddsLines();
		$this->WageringOddsLines->constructClasses();
	}

	function testWageringOddsLinesControllerInstance() {
		$this->assertTrue(is_a($this->WageringOddsLines, 'WageringOddsLinesController'));
	}

	function endTest() {
		unset($this->WageringOddsLines);
	}
}
?>