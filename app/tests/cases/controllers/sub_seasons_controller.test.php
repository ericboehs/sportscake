<?php 
/* SVN FILE: $Id$ */
/* SubSeasonsController Test cases generated on: 2009-08-20 15:08:49 : 1250799229*/
App::import('Controller', 'SubSeasons');

class TestSubSeasons extends SubSeasonsController {
	var $autoRender = false;
}

class SubSeasonsControllerTest extends CakeTestCase {
	var $SubSeasons = null;

	function startTest() {
		$this->SubSeasons = new TestSubSeasons();
		$this->SubSeasons->constructClasses();
	}

	function testSubSeasonsControllerInstance() {
		$this->assertTrue(is_a($this->SubSeasons, 'SubSeasonsController'));
	}

	function endTest() {
		unset($this->SubSeasons);
	}
}
?>