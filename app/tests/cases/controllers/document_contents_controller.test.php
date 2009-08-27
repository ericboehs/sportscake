<?php 
/* SVN FILE: $Id$ */
/* DocumentContentsController Test cases generated on: 2009-08-20 15:08:33 : 1250799033*/
App::import('Controller', 'DocumentContents');

class TestDocumentContents extends DocumentContentsController {
	var $autoRender = false;
}

class DocumentContentsControllerTest extends CakeTestCase {
	var $DocumentContents = null;

	function startTest() {
		$this->DocumentContents = new TestDocumentContents();
		$this->DocumentContents->constructClasses();
	}

	function testDocumentContentsControllerInstance() {
		$this->assertTrue(is_a($this->DocumentContents, 'DocumentContentsController'));
	}

	function endTest() {
		unset($this->DocumentContents);
	}
}
?>