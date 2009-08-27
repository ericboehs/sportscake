<?php 
/* SVN FILE: $Id$ */
/* SoccerActionSubstitutionsController Test cases generated on: 2009-08-20 15:08:24 : 1250799204*/
App::import('Controller', 'SoccerActionSubstitutions');

class TestSoccerActionSubstitutions extends SoccerActionSubstitutionsController {
	var $autoRender = false;
}

class SoccerActionSubstitutionsControllerTest extends CakeTestCase {
	var $SoccerActionSubstitutions = null;

	function startTest() {
		$this->SoccerActionSubstitutions = new TestSoccerActionSubstitutions();
		$this->SoccerActionSubstitutions->constructClasses();
	}

	function testSoccerActionSubstitutionsControllerInstance() {
		$this->assertTrue(is_a($this->SoccerActionSubstitutions, 'SoccerActionSubstitutionsController'));
	}

	function endTest() {
		unset($this->SoccerActionSubstitutions);
	}
}
?>