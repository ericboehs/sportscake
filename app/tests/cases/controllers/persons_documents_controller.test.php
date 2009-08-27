<?php 
/* SVN FILE: $Id$ */
/* PersonsDocumentsController Test cases generated on: 2009-08-20 15:08:00 : 1250799180*/
App::import('Controller', 'PersonsDocuments');

class TestPersonsDocuments extends PersonsDocumentsController {
	var $autoRender = false;
}

class PersonsDocumentsControllerTest extends CakeTestCase {
	var $PersonsDocuments = null;

	function startTest() {
		$this->PersonsDocuments = new TestPersonsDocuments();
		$this->PersonsDocuments->constructClasses();
	}

	function testPersonsDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->PersonsDocuments, 'PersonsDocumentsController'));
	}

	function endTest() {
		unset($this->PersonsDocuments);
	}
}
?>