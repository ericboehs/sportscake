<?php 
/* SVN FILE: $Id$ */
/* DocumentPackagesController Test cases generated on: 2009-08-20 15:08:42 : 1250799042*/
App::import('Controller', 'DocumentPackages');

class TestDocumentPackages extends DocumentPackagesController {
	var $autoRender = false;
}

class DocumentPackagesControllerTest extends CakeTestCase {
	var $DocumentPackages = null;

	function startTest() {
		$this->DocumentPackages = new TestDocumentPackages();
		$this->DocumentPackages->constructClasses();
	}

	function testDocumentPackagesControllerInstance() {
		$this->assertTrue(is_a($this->DocumentPackages, 'DocumentPackagesController'));
	}

	function endTest() {
		unset($this->DocumentPackages);
	}
}
?>