<?php 
/* SVN FILE: $Id$ */
/* WageringStraightSpreadLinesController Test cases generated on: 2009-08-20 15:08:25 : 1250799265*/
App::import('Controller', 'WageringStraightSpreadLines');

class TestWageringStraightSpreadLines extends WageringStraightSpreadLinesController {
	var $autoRender = false;
}

class WageringStraightSpreadLinesControllerTest extends CakeTestCase {
	var $WageringStraightSpreadLines = null;

	function startTest() {
		$this->WageringStraightSpreadLines = new TestWageringStraightSpreadLines();
		$this->WageringStraightSpreadLines->constructClasses();
	}

	function testWageringStraightSpreadLinesControllerInstance() {
		$this->assertTrue(is_a($this->WageringStraightSpreadLines, 'WageringStraightSpreadLinesController'));
	}

	function endTest() {
		unset($this->WageringStraightSpreadLines);
	}
}
?>