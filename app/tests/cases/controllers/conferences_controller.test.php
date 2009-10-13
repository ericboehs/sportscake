<?php 
/* SVN FILE: $Id$ */
/* ConferencesController Test cases generated on: 2009-10-13 20:06:18 : 1255464378*/
App::import('Controller', 'Conferences');

class TestConferences extends ConferencesController {
	var $autoRender = false;
}

class ConferencesControllerTest extends CakeTestCase {
	var $Conferences = null;

	function startTest() {
		$this->Conferences = new TestConferences();
		$this->Conferences->constructClasses();
	}

	function testConferencesControllerInstance() {
		$this->assertTrue(is_a($this->Conferences, 'ConferencesController'));
	}

	function endTest() {
		unset($this->Conferences);
	}
}
?>