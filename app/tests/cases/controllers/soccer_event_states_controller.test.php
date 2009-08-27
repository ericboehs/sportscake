<?php 
/* SVN FILE: $Id$ */
/* SoccerEventStatesController Test cases generated on: 2009-08-20 15:08:27 : 1250799207*/
App::import('Controller', 'SoccerEventStates');

class TestSoccerEventStates extends SoccerEventStatesController {
	var $autoRender = false;
}

class SoccerEventStatesControllerTest extends CakeTestCase {
	var $SoccerEventStates = null;

	function startTest() {
		$this->SoccerEventStates = new TestSoccerEventStates();
		$this->SoccerEventStates->constructClasses();
	}

	function testSoccerEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->SoccerEventStates, 'SoccerEventStatesController'));
	}

	function endTest() {
		unset($this->SoccerEventStates);
	}
}
?>