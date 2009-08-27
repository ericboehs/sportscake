<?php 
/* SVN FILE: $Id$ */
/* BaseballDefensivePlayersController Test cases generated on: 2009-08-20 15:08:18 : 1250798958*/
App::import('Controller', 'BaseballDefensivePlayers');

class TestBaseballDefensivePlayers extends BaseballDefensivePlayersController {
	var $autoRender = false;
}

class BaseballDefensivePlayersControllerTest extends CakeTestCase {
	var $BaseballDefensivePlayers = null;

	function startTest() {
		$this->BaseballDefensivePlayers = new TestBaseballDefensivePlayers();
		$this->BaseballDefensivePlayers->constructClasses();
	}

	function testBaseballDefensivePlayersControllerInstance() {
		$this->assertTrue(is_a($this->BaseballDefensivePlayers, 'BaseballDefensivePlayersController'));
	}

	function endTest() {
		unset($this->BaseballDefensivePlayers);
	}
}
?>