<?php 
/* SVN FILE: $Id$ */
/* SoccerActionParticipantsController Test cases generated on: 2009-08-20 15:08:31 : 1250801071*/
App::import('Controller', 'SoccerActionParticipants');

class TestSoccerActionParticipants extends SoccerActionParticipantsController {
	var $autoRender = false;
}

class SoccerActionParticipantsControllerTest extends CakeTestCase {
	var $SoccerActionParticipants = null;

	function startTest() {
		$this->SoccerActionParticipants = new TestSoccerActionParticipants();
		$this->SoccerActionParticipants->constructClasses();
	}

	function testSoccerActionParticipantsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerActionParticipants, 'SoccerActionParticipantsController'));
	}

	function endTest() {
		unset($this->SoccerActionParticipants);
	}
}
?>