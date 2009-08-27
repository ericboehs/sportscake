<?php 
/* SVN FILE: $Id$ */
/* StandingSubgroupsController Test cases generated on: 2009-08-20 15:08:33 : 1250799213*/
App::import('Controller', 'StandingSubgroups');

class TestStandingSubgroups extends StandingSubgroupsController {
	var $autoRender = false;
}

class StandingSubgroupsControllerTest extends CakeTestCase {
	var $StandingSubgroups = null;

	function startTest() {
		$this->StandingSubgroups = new TestStandingSubgroups();
		$this->StandingSubgroups->constructClasses();
	}

	function testStandingSubgroupsControllerInstance() {
		$this->assertTrue(is_a($this->StandingSubgroups, 'StandingSubgroupsController'));
	}

	function endTest() {
		unset($this->StandingSubgroups);
	}
}
?>