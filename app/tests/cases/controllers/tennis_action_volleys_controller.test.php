<?php 
/* SVN FILE: $Id$ */
/* TennisActionVolleysController Test cases generated on: 2009-08-20 15:08:02 : 1250799242*/
App::import('Controller', 'TennisActionVolleys');

class TestTennisActionVolleys extends TennisActionVolleysController {
	var $autoRender = false;
}

class TennisActionVolleysControllerTest extends CakeTestCase {
	var $TennisActionVolleys = null;

	function startTest() {
		$this->TennisActionVolleys = new TestTennisActionVolleys();
		$this->TennisActionVolleys->constructClasses();
	}

	function testTennisActionVolleysControllerInstance() {
		$this->assertTrue(is_a($this->TennisActionVolleys, 'TennisActionVolleysController'));
	}

	function endTest() {
		unset($this->TennisActionVolleys);
	}
}
?>