<?php 
/* SVN FILE: $Id$ */
/* BaseballActionPitchesController Test cases generated on: 2009-08-20 15:08:10 : 1250798950*/
App::import('Controller', 'BaseballActionPitches');

class TestBaseballActionPitches extends BaseballActionPitchesController {
	var $autoRender = false;
}

class BaseballActionPitchesControllerTest extends CakeTestCase {
	var $BaseballActionPitches = null;

	function startTest() {
		$this->BaseballActionPitches = new TestBaseballActionPitches();
		$this->BaseballActionPitches->constructClasses();
	}

	function testBaseballActionPitchesControllerInstance() {
		$this->assertTrue(is_a($this->BaseballActionPitches, 'BaseballActionPitchesController'));
	}

	function endTest() {
		unset($this->BaseballActionPitches);
	}
}
?>