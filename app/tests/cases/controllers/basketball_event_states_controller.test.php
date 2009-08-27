<?php 
/* SVN FILE: $Id$ */
/* BasketballEventStatesController Test cases generated on: 2009-08-20 15:08:31 : 1250798971*/
App::import('Controller', 'BasketballEventStates');

class TestBasketballEventStates extends BasketballEventStatesController {
	var $autoRender = false;
}

class BasketballEventStatesControllerTest extends CakeTestCase {
	var $BasketballEventStates = null;

	function startTest() {
		$this->BasketballEventStates = new TestBasketballEventStates();
		$this->BasketballEventStates->constructClasses();
	}

	function testBasketballEventStatesControllerInstance() {
		$this->assertTrue(is_a($this->BasketballEventStates, 'BasketballEventStatesController'));
	}

	function endTest() {
		unset($this->BasketballEventStates);
	}
}
?>