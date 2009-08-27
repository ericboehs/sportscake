<?php 
/* SVN FILE: $Id$ */
/* KeyAliasesController Test cases generated on: 2009-08-20 15:08:56 : 1250799116*/
App::import('Controller', 'KeyAliases');

class TestKeyAliases extends KeyAliasesController {
	var $autoRender = false;
}

class KeyAliasesControllerTest extends CakeTestCase {
	var $KeyAliases = null;

	function startTest() {
		$this->KeyAliases = new TestKeyAliases();
		$this->KeyAliases->constructClasses();
	}

	function testKeyAliasesControllerInstance() {
		$this->assertTrue(is_a($this->KeyAliases, 'KeyAliasesController'));
	}

	function endTest() {
		unset($this->KeyAliases);
	}
}
?>