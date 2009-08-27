<?php 
/* SVN FILE: $Id$ */
/* PublishersController Test cases generated on: 2009-08-20 15:08:08 : 1250799188*/
App::import('Controller', 'Publishers');

class TestPublishers extends PublishersController {
	var $autoRender = false;
}

class PublishersControllerTest extends CakeTestCase {
	var $Publishers = null;

	function startTest() {
		$this->Publishers = new TestPublishers();
		$this->Publishers->constructClasses();
	}

	function testPublishersControllerInstance() {
		$this->assertTrue(is_a($this->Publishers, 'PublishersController'));
	}

	function endTest() {
		unset($this->Publishers);
	}
}
?>