<?php 
/* SVN FILE: $Id$ */
/* DocumentFixturesEventsController Test cases generated on: 2009-08-20 15:08:35 : 1250799035*/
App::import('Controller', 'DocumentFixturesEvents');

class TestDocumentFixturesEvents extends DocumentFixturesEventsController {
	var $autoRender = false;
}

class DocumentFixturesEventsControllerTest extends CakeTestCase {
	var $DocumentFixturesEvents = null;

	function startTest() {
		$this->DocumentFixturesEvents = new TestDocumentFixturesEvents();
		$this->DocumentFixturesEvents->constructClasses();
	}

	function testDocumentFixturesEventsControllerInstance() {
		$this->assertTrue(is_a($this->DocumentFixturesEvents, 'DocumentFixturesEventsController'));
	}

	function endTest() {
		unset($this->DocumentFixturesEvents);
	}
}
?>