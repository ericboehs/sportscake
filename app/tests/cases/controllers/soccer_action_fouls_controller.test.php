<?php 
/* SVN FILE: $Id$ */
/* SoccerActionFoulsController Test cases generated on: 2009-08-20 15:08:17 : 1250799197*/
App::import('Controller', 'SoccerActionFouls');

class TestSoccerActionFouls extends SoccerActionFoulsController {
	var $autoRender = false;
}

class SoccerActionFoulsControllerTest extends CakeTestCase {
	var $SoccerActionFouls = null;

	function startTest() {
		$this->SoccerActionFouls = new TestSoccerActionFouls();
		$this->SoccerActionFouls->constructClasses();
	}

	function testSoccerActionFoulsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerActionFouls, 'SoccerActionFoulsController'));
	}

	function endTest() {
		unset($this->SoccerActionFouls);
	}
}
?>