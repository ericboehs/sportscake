<?php 
/* SVN FILE: $Id$ */
/* WageringTotalScoreLinesController Test cases generated on: 2009-08-20 15:08:28 : 1250799268*/
App::import('Controller', 'WageringTotalScoreLines');

class TestWageringTotalScoreLines extends WageringTotalScoreLinesController {
	var $autoRender = false;
}

class WageringTotalScoreLinesControllerTest extends CakeTestCase {
	var $WageringTotalScoreLines = null;

	function startTest() {
		$this->WageringTotalScoreLines = new TestWageringTotalScoreLines();
		$this->WageringTotalScoreLines->constructClasses();
	}

	function testWageringTotalScoreLinesControllerInstance() {
		$this->assertTrue(is_a($this->WageringTotalScoreLines, 'WageringTotalScoreLinesController'));
	}

	function endTest() {
		unset($this->WageringTotalScoreLines);
	}
}
?>