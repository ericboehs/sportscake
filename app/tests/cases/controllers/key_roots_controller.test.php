<?php 
/* SVN FILE: $Id$ */
/* KeyRootsController Test cases generated on: 2009-08-20 15:08:59 : 1250799119*/
App::import('Controller', 'KeyRoots');

class TestKeyRoots extends KeyRootsController {
	var $autoRender = false;
}

class KeyRootsControllerTest extends CakeTestCase {
	var $KeyRoots = null;

	function startTest() {
		$this->KeyRoots = new TestKeyRoots();
		$this->KeyRoots->constructClasses();
	}

	function testKeyRootsControllerInstance() {
		$this->assertTrue(is_a($this->KeyRoots, 'KeyRootsController'));
	}

	function endTest() {
		unset($this->KeyRoots);
	}
}
?>