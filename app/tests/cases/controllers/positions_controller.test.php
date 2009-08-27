<?php 
/* SVN FILE: $Id$ */
/* PositionsController Test cases generated on: 2009-08-20 15:08:07 : 1250800627*/
App::import('Controller', 'Positions');

class TestPositions extends PositionsController {
	var $autoRender = false;
}

class PositionsControllerTest extends CakeTestCase {
	var $Positions = null;

	function startTest() {
		$this->Positions = new TestPositions();
		$this->Positions->constructClasses();
	}

	function testPositionsControllerInstance() {
		$this->assertTrue(is_a($this->Positions, 'PositionsController'));
	}

	function endTest() {
		unset($this->Positions);
	}
}
?>