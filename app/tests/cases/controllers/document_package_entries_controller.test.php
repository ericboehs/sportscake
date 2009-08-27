<?php 
/* SVN FILE: $Id$ */
/* DocumentPackageEntriesController Test cases generated on: 2009-08-20 15:08:37 : 1250799037*/
App::import('Controller', 'DocumentPackageEntries');

class TestDocumentPackageEntries extends DocumentPackageEntriesController {
	var $autoRender = false;
}

class DocumentPackageEntriesControllerTest extends CakeTestCase {
	var $DocumentPackageEntries = null;

	function startTest() {
		$this->DocumentPackageEntries = new TestDocumentPackageEntries();
		$this->DocumentPackageEntries->constructClasses();
	}

	function testDocumentPackageEntriesControllerInstance() {
		$this->assertTrue(is_a($this->DocumentPackageEntries, 'DocumentPackageEntriesController'));
	}

	function endTest() {
		unset($this->DocumentPackageEntries);
	}
}
?>