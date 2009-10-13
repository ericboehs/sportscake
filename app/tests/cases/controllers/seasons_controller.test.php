<?php 
/* SVN FILE: $Id$ */
/* SeasonsController Test cases generated on: 2009-10-13 20:02:22 : 1255464142*/
App::import('Controller', 'Seasons');

class TestSeasons extends SeasonsController {
	var $autoRender = false;
}

class SeasonsControllerTest extends CakeTestCase {
	var $Seasons = null;

	function startTest() {
		$this->Seasons = new TestSeasons();
		$this->Seasons->constructClasses();
	}

	function testSeasonsControllerInstance() {
		$this->assertTrue(is_a($this->Seasons, 'SeasonsController'));
	}

	function endTest() {
		unset($this->Seasons);
	}
}
?>