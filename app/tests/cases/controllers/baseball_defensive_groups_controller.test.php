<?php 
/* SVN FILE: $Id$ */
/* BaseballDefensiveGroupsController Test cases generated on: 2009-08-20 15:08:15 : 1250798955*/
App::import('Controller', 'BaseballDefensiveGroups');

class TestBaseballDefensiveGroups extends BaseballDefensiveGroupsController {
	var $autoRender = false;
}

class BaseballDefensiveGroupsControllerTest extends CakeTestCase {
	var $BaseballDefensiveGroups = null;

	function startTest() {
		$this->BaseballDefensiveGroups = new TestBaseballDefensiveGroups();
		$this->BaseballDefensiveGroups->constructClasses();
	}

	function testBaseballDefensiveGroupsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballDefensiveGroups, 'BaseballDefensiveGroupsController'));
	}

	function endTest() {
		unset($this->BaseballDefensiveGroups);
	}
}
?>