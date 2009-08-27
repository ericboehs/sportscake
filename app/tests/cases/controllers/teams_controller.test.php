<?php 
/* SVN FILE: $Id$ */
/* TeamsController Test cases generated on: 2009-08-20 15:08:53 : 1250799233*/
App::import('Controller', 'Teams');

class TestTeams extends TeamsController {
	var $autoRender = false;
}

class TeamsControllerTest extends CakeTestCase {
	var $Teams = null;

	function startTest() {
		$this->Teams = new TestTeams();
		$this->Teams->constructClasses();
	}

	function testTeamsControllerInstance() {
		$this->assertTrue(is_a($this->Teams, 'TeamsController'));
	}

	function endTest() {
		unset($this->Teams);
	}
}
?>