<?php 
/* SVN FILE: $Id$ */
/* EventsMediaController Test cases generated on: 2009-08-20 15:08:31 : 1250799091*/
App::import('Controller', 'EventsMedia');

class TestEventsMedia extends EventsMediaController {
	var $autoRender = false;
}

class EventsMediaControllerTest extends CakeTestCase {
	var $EventsMedia = null;

	function startTest() {
		$this->EventsMedia = new TestEventsMedia();
		$this->EventsMedia->constructClasses();
	}

	function testEventsMediaControllerInstance() {
		$this->assertTrue(is_a($this->EventsMedia, 'EventsMediaController'));
	}

	function endTest() {
		unset($this->EventsMedia);
	}
}
?>