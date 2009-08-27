<?php 
/* SVN FILE: $Id$ */
/* BookmakersController Test cases generated on: 2009-08-20 15:08:39 : 1250798979*/
App::import('Controller', 'Bookmakers');

class TestBookmakers extends BookmakersController {
	var $autoRender = false;
}

class BookmakersControllerTest extends CakeTestCase {
	var $Bookmakers = null;

	function startTest() {
		$this->Bookmakers = new TestBookmakers();
		$this->Bookmakers->constructClasses();
	}

	function testBookmakersControllerInstance() {
		$this->assertTrue(is_a($this->Bookmakers, 'BookmakersController'));
	}

	function endTest() {
		unset($this->Bookmakers);
	}
}
?>