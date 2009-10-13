<?php 
/* SVN FILE: $Id$ */
/* LeaguesController Test cases generated on: 2009-10-13 20:02:10 : 1255464130*/
App::import('Controller', 'Leagues');

class TestLeagues extends LeaguesController {
	var $autoRender = false;
}

class LeaguesControllerTest extends CakeTestCase {
	var $Leagues = null;

	function startTest() {
		$this->Leagues = new TestLeagues();
		$this->Leagues->constructClasses();
	}

	function testLeaguesControllerInstance() {
		$this->assertTrue(is_a($this->Leagues, 'LeaguesController'));
	}

	function endTest() {
		unset($this->Leagues);
	}
}
?>