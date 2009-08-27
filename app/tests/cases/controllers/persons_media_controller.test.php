<?php 
/* SVN FILE: $Id$ */
/* PersonsMediaController Test cases generated on: 2009-08-20 15:08:02 : 1250799182*/
App::import('Controller', 'PersonsMedia');

class TestPersonsMedia extends PersonsMediaController {
	var $autoRender = false;
}

class PersonsMediaControllerTest extends CakeTestCase {
	var $PersonsMedia = null;

	function startTest() {
		$this->PersonsMedia = new TestPersonsMedia();
		$this->PersonsMedia->constructClasses();
	}

	function testPersonsMediaControllerInstance() {
		$this->assertTrue(is_a($this->PersonsMedia, 'PersonsMediaController'));
	}

	function endTest() {
		unset($this->PersonsMedia);
	}
}
?>