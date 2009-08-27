<?php 
/* SVN FILE: $Id$ */
/* IceHockeyEventStatesController Test cases generated on: 2009-08-20 15:08:43 : 1250799103*/
App::import('Controller', 'IceHockeyEventStates');

class TestIceHockeyEventStates extends IceHockeyEventStatesController {
	var $autoRender = false;
}

class IceHockeyEventStatesControllerTest extends CakeTestCase {
	var $IceHockeyEventStates = null;

	function startTest() {
		$this->IceHockeyEventStates = new TestIceHockeyEventStates();
		$this->IceHockeyEventStates->constructClasses();
	}

	function testIceHockeyEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyEventStates, 'IceHockeyEventStatesController'));
	}

	function endTest() {
		unset($this->IceHockeyEventStates);
	}
}
?>