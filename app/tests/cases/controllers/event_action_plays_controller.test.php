<?php 
/* SVN FILE: $Id$ */
/* EventActionPlaysController Test cases generated on: 2009-08-20 15:08:03 : 1250799063*/
App::import('Controller', 'EventActionPlays');

class TestEventActionPlays extends EventActionPlaysController {
	var $autoRender = false;
}

class EventActionPlaysControllerTest extends CakeTestCase {
	var $EventActionPlays = null;

	function startTest() {
		$this->EventActionPlays = new TestEventActionPlays();
		$this->EventActionPlays->constructClasses();
	}

	function testEventActionPlaysControllerInstance() {
		$this->assertTrue(is_a($this->EventActionPlays, 'EventActionPlaysController'));
	}

	function endTest() {
		unset($this->EventActionPlays);
	}
}
?>