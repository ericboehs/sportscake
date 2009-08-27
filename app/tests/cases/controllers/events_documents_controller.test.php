<?php 
/* SVN FILE: $Id$ */
/* EventsDocumentsController Test cases generated on: 2009-08-20 15:08:14 : 1250799074*/
App::import('Controller', 'EventsDocuments');

class TestEventsDocuments extends EventsDocumentsController {
	var $autoRender = false;
}

class EventsDocumentsControllerTest extends CakeTestCase {
	var $EventsDocuments = null;

	function startTest() {
		$this->EventsDocuments = new TestEventsDocuments();
		$this->EventsDocuments->constructClasses();
	}

	function testEventsDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->EventsDocuments, 'EventsDocumentsController'));
	}

	function endTest() {
		unset($this->EventsDocuments);
	}
}
?>