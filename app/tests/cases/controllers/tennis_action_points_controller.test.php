<?php 
/* SVN FILE: $Id$ */
/* TennisActionPointsController Test cases generated on: 2009-08-20 15:08:58 : 1250799238*/
App::import('Controller', 'TennisActionPoints');

class TestTennisActionPoints extends TennisActionPointsController {
	var $autoRender = false;
}

class TennisActionPointsControllerTest extends CakeTestCase {
	var $TennisActionPoints = null;

	function startTest() {
		$this->TennisActionPoints = new TestTennisActionPoints();
		$this->TennisActionPoints->constructClasses();
	}

	function testTennisActionPointsControllerInstance() {
		$this->assertTrue(is_a($this->TennisActionPoints, 'TennisActionPointsController'));
	}

	function endTest() {
		unset($this->TennisActionPoints);
	}
}
?>