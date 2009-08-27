<?php 
/* SVN FILE: $Id$ */
/* DisplayNamesController Test cases generated on: 2009-08-20 15:08:30 : 1250799030*/
App::import('Controller', 'DisplayNames');

class TestDisplayNames extends DisplayNamesController {
	var $autoRender = false;
}

class DisplayNamesControllerTest extends CakeTestCase {
	var $DisplayNames = null;

	function startTest() {
		$this->DisplayNames = new TestDisplayNames();
		$this->DisplayNames->constructClasses();
	}

	function testDisplayNamesControllerInstance() {
		$this->assertTrue(is_a($this->DisplayNames, 'DisplayNamesController'));
	}

	function endTest() {
		unset($this->DisplayNames);
	}
}
?>