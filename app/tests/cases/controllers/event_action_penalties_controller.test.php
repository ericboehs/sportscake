<?php 
/* SVN FILE: $Id$ */
/* EventActionPenaltiesController Test cases generated on: 2009-08-20 15:08:01 : 1250799061*/
App::import('Controller', 'EventActionPenalties');

class TestEventActionPenalties extends EventActionPenaltiesController {
	var $autoRender = false;
}

class EventActionPenaltiesControllerTest extends CakeTestCase {
	var $EventActionPenalties = null;

	function startTest() {
		$this->EventActionPenalties = new TestEventActionPenalties();
		$this->EventActionPenalties->constructClasses();
	}

	function testEventActionPenaltiesControllerInstance() {
		$this->assertTrue(is_a($this->EventActionPenalties, 'EventActionPenaltiesController'));
	}

	function endTest() {
		unset($this->EventActionPenalties);
	}
}
?>