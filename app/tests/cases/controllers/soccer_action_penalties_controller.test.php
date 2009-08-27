<?php 
/* SVN FILE: $Id$ */
/* SoccerActionPenaltiesController Test cases generated on: 2009-08-20 15:08:20 : 1250799200*/
App::import('Controller', 'SoccerActionPenalties');

class TestSoccerActionPenalties extends SoccerActionPenaltiesController {
	var $autoRender = false;
}

class SoccerActionPenaltiesControllerTest extends CakeTestCase {
	var $SoccerActionPenalties = null;

	function startTest() {
		$this->SoccerActionPenalties = new TestSoccerActionPenalties();
		$this->SoccerActionPenalties->constructClasses();
	}

	function testSoccerActionPenaltiesControllerInstance() {
		$this->assertTrue(is_a($this->SoccerActionPenalties, 'SoccerActionPenaltiesController'));
	}

	function endTest() {
		unset($this->SoccerActionPenalties);
	}
}
?>