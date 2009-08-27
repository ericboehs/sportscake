<?php 
/* SVN FILE: $Id$ */
/* SeasonsController Test cases generated on: 2009-08-20 15:08:15 : 1250799195*/
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