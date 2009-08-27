<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballActionParticipantsController Test cases generated on: 2009-08-20 15:08:14 : 1250798894*/
App::import('Controller', 'AmericanFootballActionParticipants');

class TestAmericanFootballActionParticipants extends AmericanFootballActionParticipantsController {
	var $autoRender = false;
}

class AmericanFootballActionParticipantsControllerTest extends CakeTestCase {
	var $AmericanFootballActionParticipants = null;

	function startTest() {
		$this->AmericanFootballActionParticipants = new TestAmericanFootballActionParticipants();
		$this->AmericanFootballActionParticipants->constructClasses();
	}

	function testAmericanFootballActionParticipantsControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballActionParticipants, 'AmericanFootballActionParticipantsController'));
	}

	function endTest() {
		unset($this->AmericanFootballActionParticipants);
	}
}
?>