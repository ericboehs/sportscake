<?php 
/* SVN FILE: $Id$ */
/* DocumentFixturesController Test cases generated on: 2009-08-20 15:08:34 : 1250799034*/
App::import('Controller', 'DocumentFixtures');

class TestDocumentFixtures extends DocumentFixturesController {
	var $autoRender = false;
}

class DocumentFixturesControllerTest extends CakeTestCase {
	var $DocumentFixtures = null;

	function startTest() {
		$this->DocumentFixtures = new TestDocumentFixtures();
		$this->DocumentFixtures->constructClasses();
	}

	function testDocumentFixturesControllerInstance() {
		$this->assertTrue(is_a($this->DocumentFixtures, 'DocumentFixturesController'));
	}

	function endTest() {
		unset($this->DocumentFixtures);
	}
}
?>