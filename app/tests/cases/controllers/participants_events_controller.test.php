<?php 
/* SVN FILE: $Id$ */
/* ParticipantsEventsController Test cases generated on: 2009-08-20 15:08:47 : 1250799167*/
App::import('Controller', 'ParticipantsEvents');

class TestParticipantsEvents extends ParticipantsEventsController {
	var $autoRender = false;
}

class ParticipantsEventsControllerTest extends CakeTestCase {
	var $ParticipantsEvents = null;

	function startTest() {
		$this->ParticipantsEvents = new TestParticipantsEvents();
		$this->ParticipantsEvents->constructClasses();
	}

	function testParticipantsEventsControllerInstance() {
		$this->assertTrue(is_a($this->ParticipantsEvents, 'ParticipantsEventsController'));
	}

	function endTest() {
		unset($this->ParticipantsEvents);
	}
}
?>