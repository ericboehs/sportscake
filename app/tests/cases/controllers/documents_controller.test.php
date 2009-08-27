<?php 
/* SVN FILE: $Id$ */
/* DocumentsController Test cases generated on: 2009-08-20 15:08:44 : 1250799044*/
App::import('Controller', 'Documents');

class TestDocuments extends DocumentsController {
	var $autoRender = false;
}

class DocumentsControllerTest extends CakeTestCase {
	var $Documents = null;

	function startTest() {
		$this->Documents = new TestDocuments();
		$this->Documents->constructClasses();
	}

	function testDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->Documents, 'DocumentsController'));
	}

	function endTest() {
		unset($this->Documents);
	}
}
?>