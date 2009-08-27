<?php 
/* SVN FILE: $Id$ */
/* BaseballEventStatesController Test cases generated on: 2009-08-20 15:08:23 : 1250798963*/
App::import('Controller', 'BaseballEventStates');

class TestBaseballEventStates extends BaseballEventStatesController {
	var $autoRender = false;
}

class BaseballEventStatesControllerTest extends CakeTestCase {
	var $BaseballEventStates = null;

	function startTest() {
		$this->BaseballEventStates = new TestBaseballEventStates();
		$this->BaseballEventStates->constructClasses();
	}

	function testBaseballEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->BaseballEventStates, 'BaseballEventStatesController'));
	}

	function endTest() {
		unset($this->BaseballEventStates);
	}
}
?>