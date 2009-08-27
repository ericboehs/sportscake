<?php 
/* SVN FILE: $Id$ */
/* MediaContentsController Test cases generated on: 2009-08-20 15:08:33 : 1250799153*/
App::import('Controller', 'MediaContents');

class TestMediaContents extends MediaContentsController {
	var $autoRender = false;
}

class MediaContentsControllerTest extends CakeTestCase {
	var $MediaContents = null;

	function startTest() {
		$this->MediaContents = new TestMediaContents();
		$this->MediaContents->constructClasses();
	}

	function testMediaContentsControllerInstance() {
		$this->assertTrue(is_a($this->MediaContents, 'MediaContentsController'));
	}

	function endTest() {
		unset($this->MediaContents);
	}
}
?>