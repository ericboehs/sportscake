<?php 
/* SVN FILE: $Id$ */
/* LocationsController Test cases generated on: 2009-08-20 15:08:10 : 1250799130*/
App::import('Controller', 'Locations');

class TestLocations extends LocationsController {
	var $autoRender = false;
}

class LocationsControllerTest extends CakeTestCase {
	var $Locations = null;

	function startTest() {
		$this->Locations = new TestLocations();
		$this->Locations->constructClasses();
	}

	function testLocationsControllerInstance() {
		$this->assertTrue(is_a($this->Locations, 'LocationsController'));
	}

	function endTest() {
		unset($this->Locations);
	}
}
?>