<?php 
/* SVN FILE: $Id$ */
/* BaseballActionPlaysController Test cases generated on: 2009-08-20 15:08:11 : 1250798951*/
App::import('Controller', 'BaseballActionPlays');

class TestBaseballActionPlays extends BaseballActionPlaysController {
	var $autoRender = false;
}

class BaseballActionPlaysControllerTest extends CakeTestCase {
	var $BaseballActionPlays = null;

	function startTest() {
		$this->BaseballActionPlays = new TestBaseballActionPlays();
		$this->BaseballActionPlays->constructClasses();
	}

	function testBaseballActionPlaysControllerInstance() {
		$this->assertTrue(is_a($this->BaseballActionPlays, 'BaseballActionPlaysController'));
	}

	function endTest() {
		unset($this->BaseballActionPlays);
	}
}
?>