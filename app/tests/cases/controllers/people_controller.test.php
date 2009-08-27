<?php 
/* SVN FILE: $Id$ */
/* PeopleController Test cases generated on: 2009-08-20 15:08:58 : 1250800618*/
App::import('Controller', 'People');

class TestPeople extends PeopleController {
	var $autoRender = false;
}

class PeopleControllerTest extends CakeTestCase {
	var $People = null;

	function startTest() {
		$this->People = new TestPeople();
		$this->People->constructClasses();
	}

	function testPeopleControllerInstance() {
		$this->assertTrue(is_a($this->People, 'PeopleController'));
	}

	function endTest() {
		unset($this->People);
	}
}
?>