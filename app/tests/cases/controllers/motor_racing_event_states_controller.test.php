<?php 
/* SVN FILE: $Id$ */
/* MotorRacingEventStatesController Test cases generated on: 2009-08-20 15:08:36 : 1250799156*/
App::import('Controller', 'MotorRacingEventStates');

class TestMotorRacingEventStates extends MotorRacingEventStatesController {
	var $autoRender = false;
}

class MotorRacingEventStatesControllerTest extends CakeTestCase {
	var $MotorRacingEventStates = null;

	function startTest() {
		$this->MotorRacingEventStates = new TestMotorRacingEventStates();
		$this->MotorRacingEventStates->constructClasses();
	}

	function testMotorRacingEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->MotorRacingEventStates, 'MotorRacingEventStatesController'));
	}

	function endTest() {
		unset($this->MotorRacingEventStates);
	}
}
?>