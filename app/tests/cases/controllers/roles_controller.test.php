<?php 
/* SVN FILE: $Id$ */
/* RolesController Test cases generated on: 2009-08-20 15:08:13 : 1250799193*/
App::import('Controller', 'Roles');

class TestRoles extends RolesController {
	var $autoRender = false;
}

class RolesControllerTest extends CakeTestCase {
	var $Roles = null;

	function startTest() {
		$this->Roles = new TestRoles();
		$this->Roles->constructClasses();
	}

	function testRolesControllerInstance() {
		$this->assertTrue(is_a($this->Roles, 'RolesController'));
	}

	function endTest() {
		unset($this->Roles);
	}
}
?>