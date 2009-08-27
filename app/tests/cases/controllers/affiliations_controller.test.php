<?php 
/* SVN FILE: $Id$ */
/* AffiliationsController Test cases generated on: 2009-08-20 15:08:02 : 1250798882*/
App::import('Controller', 'Affiliations');

class TestAffiliations extends AffiliationsController {
	var $autoRender = false;
}

class AffiliationsControllerTest extends CakeTestCase {
	var $Affiliations = null;

	function startTest() {
		$this->Affiliations = new TestAffiliations();
		$this->Affiliations->constructClasses();
	}

	function testAffiliationsControllerInstance() {
		$this->assertTrue(is_a($this->Affiliations, 'AffiliationsController'));
	}

	function endTest() {
		unset($this->Affiliations);
	}
}
?>