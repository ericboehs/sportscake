<?php 
/* SVN FILE: $Id$ */
/* EventActionSubstitutionsController Test cases generated on: 2009-08-20 15:08:05 : 1250799065*/
App::import('Controller', 'EventActionSubstitutions');

class TestEventActionSubstitutions extends EventActionSubstitutionsController {
	var $autoRender = false;
}

class EventActionSubstitutionsControllerTest extends CakeTestCase {
	var $EventActionSubstitutions = null;

	function startTest() {
		$this->EventActionSubstitutions = new TestEventActionSubstitutions();
		$this->EventActionSubstitutions->constructClasses();
	}

	function testEventActionSubstitutionsControllerInstance() {
		$this->assertTrue(is_a($this->EventActionSubstitutions, 'EventActionSubstitutionsController'));
	}

	function endTest() {
		unset($this->EventActionSubstitutions);
	}
}
?>