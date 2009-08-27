<?php 
/* SVN FILE: $Id$ */
/* EventActionParticipantsController Test cases generated on: 2009-08-20 15:08:57 : 1250799057*/
App::import('Controller', 'EventActionParticipants');

class TestEventActionParticipants extends EventActionParticipantsController {
	var $autoRender = false;
}

class EventActionParticipantsControllerTest extends CakeTestCase {
	var $EventActionParticipants = null;

	function startTest() {
		$this->EventActionParticipants = new TestEventActionParticipants();
		$this->EventActionParticipants->constructClasses();
	}

	function testEventActionParticipantsControllerInstance() {
		$this->assertTrue(is_a($this->EventActionParticipants, 'EventActionParticipantsController'));
	}

	function endTest() {
		unset($this->EventActionParticipants);
	}
}
?>