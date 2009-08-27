<?php 
/* SVN FILE: $Id$ */
/* BaseballActionSubstitutionsController Test cases generated on: 2009-08-20 15:08:13 : 1250798953*/
App::import('Controller', 'BaseballActionSubstitutions');

class TestBaseballActionSubstitutions extends BaseballActionSubstitutionsController {
	var $autoRender = false;
}

class BaseballActionSubstitutionsControllerTest extends CakeTestCase {
	var $BaseballActionSubstitutions = null;

	function startTest() {
		$this->BaseballActionSubstitutions = new TestBaseballActionSubstitutions();
		$this->BaseballActionSubstitutions->constructClasses();
	}

	function testBaseballActionSubstitutionsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballActionSubstitutions, 'BaseballActionSubstitutionsController'));
	}

	function endTest() {
		unset($this->BaseballActionSubstitutions);
	}
}
?>