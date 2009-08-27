<?php 
/* SVN FILE: $Id$ */
/* InjuryPhasesController Test cases generated on: 2009-08-20 15:08:51 : 1250799111*/
App::import('Controller', 'InjuryPhases');

class TestInjuryPhases extends InjuryPhasesController {
	var $autoRender = false;
}

class InjuryPhasesControllerTest extends CakeTestCase {
	var $InjuryPhases = null;

	function startTest() {
		$this->InjuryPhases = new TestInjuryPhases();
		$this->InjuryPhases->constructClasses();
	}

	function testInjuryPhasesControllerInstance() {
		$this->assertTrue(is_a($this->InjuryPhases, 'InjuryPhasesController'));
	}

	function endTest() {
		unset($this->InjuryPhases);
	}
}
?>