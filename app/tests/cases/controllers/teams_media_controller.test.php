<?php 
/* SVN FILE: $Id$ */
/* TeamsMediaController Test cases generated on: 2009-08-20 15:08:56 : 1250799236*/
App::import('Controller', 'TeamsMedia');

class TestTeamsMedia extends TeamsMediaController {
	var $autoRender = false;
}

class TeamsMediaControllerTest extends CakeTestCase {
	var $TeamsMedia = null;

	function startTest() {
		$this->TeamsMedia = new TestTeamsMedia();
		$this->TeamsMedia->constructClasses();
	}

	function testTeamsMediaControllerInstance() {
		$this->assertTrue(is_a($this->TeamsMedia, 'TeamsMediaController'));
	}

	function endTest() {
		unset($this->TeamsMedia);
	}
}
?>