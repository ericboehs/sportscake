<?php 
/* SVN FILE: $Id$ */
/* MediaKeywordsController Test cases generated on: 2009-08-20 15:08:34 : 1250799154*/
App::import('Controller', 'MediaKeywords');

class TestMediaKeywords extends MediaKeywordsController {
	var $autoRender = false;
}

class MediaKeywordsControllerTest extends CakeTestCase {
	var $MediaKeywords = null;

	function startTest() {
		$this->MediaKeywords = new TestMediaKeywords();
		$this->MediaKeywords->constructClasses();
	}

	function testMediaKeywordsControllerInstance() {
		$this->assertTrue(is_a($this->MediaKeywords, 'MediaKeywordsController'));
	}

	function endTest() {
		unset($this->MediaKeywords);
	}
}
?>