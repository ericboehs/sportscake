<?php 
/* SVN FILE: $Id$ */
/* EventActionFoulsController Test cases generated on: 2009-08-20 15:08:56 : 1250799056*/
App::import('Controller', 'EventActionFouls');

class TestEventActionFouls extends EventActionFoulsController {
	var $autoRender = false;
}

class EventActionFoulsControllerTest extends CakeTestCase {
	var $EventActionFouls = null;

	function startTest() {
		$this->EventActionFouls = new TestEventActionFouls();
		$this->EventActionFouls->constructClasses();
	}

	function testEventActionFoulsControllerInstance() {
		$this->assertTrue(is_a($this->EventActionFouls, 'EventActionFoulsController'));
	}

	function endTest() {
		unset($this->EventActionFouls);
	}
}
?>