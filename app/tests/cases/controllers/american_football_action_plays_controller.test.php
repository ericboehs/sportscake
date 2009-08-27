<?php 
/* SVN FILE: $Id$ */
/* AmericanFootballActionPlaysController Test cases generated on: 2009-08-20 15:08:17 : 1250798897*/
App::import('Controller', 'AmericanFootballActionPlays');

class TestAmericanFootballActionPlays extends AmericanFootballActionPlaysController {
	var $autoRender = false;
}

class AmericanFootballActionPlaysControllerTest extends CakeTestCase {
	var $AmericanFootballActionPlays = null;

	function startTest() {
		$this->AmericanFootballActionPlays = new TestAmericanFootballActionPlays();
		$this->AmericanFootballActionPlays->constructClasses();
	}

	function testAmericanFootballActionPlaysControllerInstance() {
		$this->assertTrue(is_a($this->AmericanFootballActionPlays, 'AmericanFootballActionPlaysController'));
	}

	function endTest() {
		unset($this->AmericanFootballActionPlays);
	}
}
?>