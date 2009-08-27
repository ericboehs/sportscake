<?php 
/* SVN FILE: $Id$ */
/* MediaCaptionsController Test cases generated on: 2009-08-20 15:08:31 : 1250799151*/
App::import('Controller', 'MediaCaptions');

class TestMediaCaptions extends MediaCaptionsController {
	var $autoRender = false;
}

class MediaCaptionsControllerTest extends CakeTestCase {
	var $MediaCaptions = null;

	function startTest() {
		$this->MediaCaptions = new TestMediaCaptions();
		$this->MediaCaptions->constructClasses();
	}

	function testMediaCaptionsControllerInstance() {
		$this->assertTrue(is_a($this->MediaCaptions, 'MediaCaptionsController'));
	}

	function endTest() {
		unset($this->MediaCaptions);
	}
}
?>