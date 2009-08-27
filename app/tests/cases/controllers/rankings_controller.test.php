<?php 
/* SVN FILE: $Id$ */
/* RankingsController Test cases generated on: 2009-08-20 15:08:09 : 1250799189*/
App::import('Controller', 'Rankings');

class TestRankings extends RankingsController {
	var $autoRender = false;
}

class RankingsControllerTest extends CakeTestCase {
	var $Rankings = null;

	function startTest() {
		$this->Rankings = new TestRankings();
		$this->Rankings->constructClasses();
	}

	function testRankingsControllerInstance() {
		$this->assertTrue(is_a($this->Rankings, 'RankingsController'));
	}

	function endTest() {
		unset($this->Rankings);
	}
}
?>