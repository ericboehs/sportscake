<?php 
/* SVN FILE: $Id$ */
/* AffiliationsDocumentsController Test cases generated on: 2009-08-20 15:08:04 : 1250798884*/
App::import('Controller', 'AffiliationsDocuments');

class TestAffiliationsDocuments extends AffiliationsDocumentsController {
	var $autoRender = false;
}

class AffiliationsDocumentsControllerTest extends CakeTestCase {
	var $AffiliationsDocuments = null;

	function startTest() {
		$this->AffiliationsDocuments = new TestAffiliationsDocuments();
		$this->AffiliationsDocuments->constructClasses();
	}

	function testAffiliationsDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->AffiliationsDocuments, 'AffiliationsDocumentsController'));
	}

	function endTest() {
		unset($this->AffiliationsDocuments);
	}
}
?>