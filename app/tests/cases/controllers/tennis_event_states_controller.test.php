<?php 
/* SVN FILE: $Id$ */
/* TennisEventStatesController Test cases generated on: 2009-08-20 15:08:27 : 1250800947*/
App::import('Controller', 'TennisEventStates');

class TestTennisEventStates extends TennisEventStatesController {
	var $autoRender = false;
}

class TennisEventStatesControllerTest extends CakeTestCase {
	var $TennisEventStates = null;

	function startTest() {
		$this->TennisEventStates = new TestTennisEventStates();
		$this->TennisEventStates->constructClasses();
	}

	function testTennisEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->TennisEventStates, 'TennisEventStatesController'));
	}

	function endTest() {
		unset($this->TennisEventStates);
	}
}
?>