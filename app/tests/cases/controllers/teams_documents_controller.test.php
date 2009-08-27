<?php 
/* SVN FILE: $Id$ */
/* TeamsDocumentsController Test cases generated on: 2009-08-20 15:08:54 : 1250799234*/
App::import('Controller', 'TeamsDocuments');

class TestTeamsDocuments extends TeamsDocumentsController {
	var $autoRender = false;
}

class TeamsDocumentsControllerTest extends CakeTestCase {
	var $TeamsDocuments = null;

	function startTest() {
		$this->TeamsDocuments = new TestTeamsDocuments();
		$this->TeamsDocuments->constructClasses();
	}

	function testTeamsDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->TeamsDocuments, 'TeamsDocumentsController'));
	}

	function endTest() {
		unset($this->TeamsDocuments);
	}
}
?>