<?php 
/* SVN FILE: $Id$ */
/* DbInfosController Test cases generated on: 2009-08-20 15:08:43 : 1250798983*/
App::import('Controller', 'DbInfos');

class TestDbInfos extends DbInfosController {
	var $autoRender = false;
}

class DbInfosControllerTest extends CakeTestCase {
	var $DbInfos = null;

	function startTest() {
		$this->DbInfos = new TestDbInfos();
		$this->DbInfos->constructClasses();
	}

	function testDbInfosControllerInstance() {
		$this->assertTrue(is_a($this->DbInfos, 'DbInfosController'));
	}

	function endTest() {
		unset($this->DbInfos);
	}
}
?>