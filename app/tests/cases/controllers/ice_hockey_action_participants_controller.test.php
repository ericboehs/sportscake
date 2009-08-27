<?php 
/* SVN FILE: $Id$ */
/* IceHockeyActionParticipantsController Test cases generated on: 2009-08-20 15:08:35 : 1250799095*/
App::import('Controller', 'IceHockeyActionParticipants');

class TestIceHockeyActionParticipants extends IceHockeyActionParticipantsController {
	var $autoRender = false;
}

class IceHockeyActionParticipantsControllerTest extends CakeTestCase {
	var $IceHockeyActionParticipants = null;

	function startTest() {
		$this->IceHockeyActionParticipants = new TestIceHockeyActionParticipants();
		$this->IceHockeyActionParticipants->constructClasses();
	}

	function testIceHockeyActionParticipantsControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyActionParticipants, 'IceHockeyActionParticipantsController'));
	}

	function endTest() {
		unset($this->IceHockeyActionParticipants);
	}
}
?>