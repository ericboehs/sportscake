<?php 
/* SVN FILE: $Id$ */
/* AwardsController Test cases generated on: 2009-08-20 15:08:04 : 1250798944*/
App::import('Controller', 'Awards');

class TestAwards extends AwardsController {
	var $autoRender = false;
}

class AwardsControllerTest extends CakeTestCase {
	var $Awards = null;

	function startTest() {
		$this->Awards = new TestAwards();
		$this->Awards->constructClasses();
	}

	function testAwardsControllerInstance() {
		$this->assertTrue(is_a($this->Awards, 'AwardsController'));
	}

	function endTest() {
		unset($this->Awards);
	}
}
?>