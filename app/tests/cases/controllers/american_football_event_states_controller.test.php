<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballEventStatesController Test cases generated on: 2009-08-20 15:08:23 : 1250798903*/
App::import('Controller', 'AmericanFootballEventStates');

class TestAmericanFootballEventStates extends AmericanFootballEventStatesController {
	var $autoRender = false;
}

class AmericanFootballEventStatesControllerTest extends CakeTestCase {
	var $AmericanFootballEventStates = null;

	function startTest() {
		$this->AmericanFootballEventStates = new TestAmericanFootballEventStates();
		$this->AmericanFootballEventStates->constructClasses();
	}

	function testAmericanFootballEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballEventStates, 'AmericanFootballEventStatesController'));
	}

	function endTest() {
		unset($this->AmericanFootballEventStates);
	}
}
?>