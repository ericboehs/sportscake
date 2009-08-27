<?php 
/* SVN FILE: $Id$ */
/* TeamPhasesController Test cases generated on: 2009-08-20 15:08:51 : 1250799231*/
App::import('Controller', 'TeamPhases');

class TestTeamPhases extends TeamPhasesController {
	var $autoRender = false;
}

class TeamPhasesControllerTest extends CakeTestCase {
	var $TeamPhases = null;

	function startTest() {
		$this->TeamPhases = new TestTeamPhases();
		$this->TeamPhases->constructClasses();
	}

	function testTeamPhasesControllerInstance() {
		$this->assertTrue(is_a($this->TeamPhases, 'TeamPhasesController'));
	}

	function endTest() {
		unset($this->TeamPhases);
	}
}
?>