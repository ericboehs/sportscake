<?php 
/* SVN FILE: $Id$ */
/* PersonPhasesController Test cases generated on: 2009-08-20 15:08:57 : 1250799177*/
App::import('Controller', 'PersonPhases');

class TestPersonPhases extends PersonPhasesController {
	var $autoRender = false;
}

class PersonPhasesControllerTest extends CakeTestCase {
	var $PersonPhases = null;

	function startTest() {
		$this->PersonPhases = new TestPersonPhases();
		$this->PersonPhases->constructClasses();
	}

	function testPersonPhasesControllerInstance() {
		$this->assertTrue(is_a($this->PersonPhases, 'PersonPhasesController'));
	}

	function endTest() {
		unset($this->PersonPhases);
	}
}
?>