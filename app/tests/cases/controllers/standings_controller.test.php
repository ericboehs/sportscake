<?php 
/* SVN FILE: $Id$ */
/* StandingsController Test cases generated on: 2009-08-20 15:08:35 : 1250799215*/
App::import('Controller', 'Standings');

class TestStandings extends StandingsController {
	var $autoRender = false;
}

class StandingsControllerTest extends CakeTestCase {
	var $Standings = null;

	function startTest() {
		$this->Standings = new TestStandings();
		$this->Standings->constructClasses();
	}

	function testStandingsControllerInstance() {
		$this->assertTrue(is_a($this->Standings, 'StandingsController'));
	}

	function endTest() {
		unset($this->Standings);
	}
}
?>