<?php 
/* SVN FILE: $Id$ */
/* AffiliationPhasesController Test cases generated on: 2009-08-20 15:08:00 : 1250798880*/
App::import('Controller', 'AffiliationPhases');

class TestAffiliationPhases extends AffiliationPhasesController {
	var $autoRender = false;
}

class AffiliationPhasesControllerTest extends CakeTestCase {
	var $AffiliationPhases = null;

	function startTest() {
		$this->AffiliationPhases = new TestAffiliationPhases();
		$this->AffiliationPhases->constructClasses();
	}

	function testAffiliationPhasesControllerInstance() {
		$this->assertTrue(is_a($this->AffiliationPhases, 'AffiliationPhasesController'));
	}

	function endTest() {
		unset($this->AffiliationPhases);
	}
}
?>