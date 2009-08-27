<?php 
/* SVN FILE: $Id$ */
/* EventStatesController Test cases generated on: 2009-08-20 15:08:12 : 1250799072*/
App::import('Controller', 'EventStates');

class TestEventStates extends EventStatesController {
	var $autoRender = false;
}

class EventStatesControllerTest extends CakeTestCase {
	var $EventStates = null;

	function startTest() {
		$this->EventStates = new TestEventStates();
		$this->EventStates->constructClasses();
	}

	function testEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->EventStates, 'EventStatesController'));
	}

	function endTest() {
		unset($this->EventStates);
	}
}
?>