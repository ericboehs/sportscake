<?php 
/* SVN FILE: $Id$ */
/* PersonEventMetadataController Test cases generated on: 2009-08-20 15:08:55 : 1250799175*/
App::import('Controller', 'PersonEventMetadata');

class TestPersonEventMetadata extends PersonEventMetadataController {
	var $autoRender = false;
}

class PersonEventMetadataControllerTest extends CakeTestCase {
	var $PersonEventMetadata = null;

	function startTest() {
		$this->PersonEventMetadata = new TestPersonEventMetadata();
		$this->PersonEventMetadata->constructClasses();
	}

	function testPersonEventMetadataControllerInstance() {
		$this->assertTrue(is_a($this->PersonEventMetadata, 'PersonEventMetadataController'));
	}

	function endTest() {
		unset($this->PersonEventMetadata);
	}
}
?>