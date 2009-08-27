<?php 
/* SVN FILE: $Id$ */
/* EventsSubSeasonsController Test cases generated on: 2009-08-20 15:08:34 : 1250799094*/
App::import('Controller', 'EventsSubSeasons');

class TestEventsSubSeasons extends EventsSubSeasonsController {
	var $autoRender = false;
}

class EventsSubSeasonsControllerTest extends CakeTestCase {
	var $EventsSubSeasons = null;

	function startTest() {
		$this->EventsSubSeasons = new TestEventsSubSeasons();
		$this->EventsSubSeasons->constructClasses();
	}

	function testEventsSubSeasonsControllerInstance() {
		$this->assertTrue(is_a($this->EventsSubSeasons, 'EventsSubSeasonsController'));
	}

	function endTest() {
		unset($this->EventsSubSeasons);
	}
}
?>