<?php 
/* SVN FILE: $Id$ */
/* IceHockeyActionPlaysController Test cases generated on: 2009-08-20 15:08:38 : 1250799098*/
App::import('Controller', 'IceHockeyActionPlays');

class TestIceHockeyActionPlays extends IceHockeyActionPlaysController {
	var $autoRender = false;
}

class IceHockeyActionPlaysControllerTest extends CakeTestCase {
	var $IceHockeyActionPlays = null;

	function startTest() {
		$this->IceHockeyActionPlays = new TestIceHockeyActionPlays();
		$this->IceHockeyActionPlays->constructClasses();
	}

	function testIceHockeyActionPlaysControllerInstance() {
		$this->assertTrue(is_a($this->IceHockeyActionPlays, 'IceHockeyActionPlaysController'));
	}

	function endTest() {
		unset($this->IceHockeyActionPlays);
	}
}
?>