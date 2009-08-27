<?php 
/* SVN FILE: $Id$ */
/* DocumentClassesController Test cases generated on: 2009-08-20 15:08:31 : 1250799031*/
App::import('Controller', 'DocumentClasses');

class TestDocumentClasses extends DocumentClassesController {
	var $autoRender = false;
}

class DocumentClassesControllerTest extends CakeTestCase {
	var $DocumentClasses = null;

	function startTest() {
		$this->DocumentClasses = new TestDocumentClasses();
		$this->DocumentClasses->constructClasses();
	}

	function testDocumentClassesControllerInstance() {
		$this->assertTrue(is_a($this->DocumentClasses, 'DocumentClassesController'));
	}

	function endTest() {
		unset($this->DocumentClasses);
	}
}
?>