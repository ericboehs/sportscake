<?php 
/* SVN FILE: $Id$ */
/* RecordsController Test cases generated on: 2009-08-20 15:08:11 : 1250799191*/
App::import('Controller', 'Records');

class TestRecords extends RecordsController {
	var $autoRender = false;
}

class RecordsControllerTest extends CakeTestCase {
	var $Records = null;

	function startTest() {
		$this->Records = new TestRecords();
		$this->Records->constructClasses();
	}

	function testRecordsControllerInstance() {
		$this->assertTrue(is_a($this->Records, 'RecordsController'));
	}

	function endTest() {
		unset($this->Records);
	}
}
?>