<?php 
/* SVN FILE: $Id$ */
/* DocumentsMediaController Test cases generated on: 2009-08-20 15:08:53 : 1250799053*/
App::import('Controller', 'DocumentsMedia');

class TestDocumentsMedia extends DocumentsMediaController {
	var $autoRender = false;
}

class DocumentsMediaControllerTest extends CakeTestCase {
	var $DocumentsMedia = null;

	function startTest() {
		$this->DocumentsMedia = new TestDocumentsMedia();
		$this->DocumentsMedia->constructClasses();
	}

	function testDocumentsMediaControllerInstance() {
		$this->assertTrue(is_a($this->DocumentsMedia, 'DocumentsMediaController'));
	}

	function endTest() {
		unset($this->DocumentsMedia);
	}
}
?>