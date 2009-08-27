<?php 
/* SVN FILE: $Id$ */
/* SoccerActionPlaysController Test cases generated on: 2009-08-20 15:08:22 : 1250799202*/
App::import('Controller', 'SoccerActionPlays');

class TestSoccerActionPlays extends SoccerActionPlaysController {
	var $autoRender = false;
}

class SoccerActionPlaysControllerTest extends CakeTestCase {
	var $SoccerActionPlays = null;

	function startTest() {
		$this->SoccerActionPlays = new TestSoccerActionPlays();
		$this->SoccerActionPlays->constructClasses();
	}

	function testSoccerActionPlaysControllerInstance() {
		$this->assertTrue(is_a($this->SoccerActionPlays, 'SoccerActionPlaysController'));
	}

	function endTest() {
		unset($this->SoccerActionPlays);
	}
}
?>