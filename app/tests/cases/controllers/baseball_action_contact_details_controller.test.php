<?php 
/* SVN FILE: $Id$ */
/* BaseballActionContactDetailsController Test cases generated on: 2009-08-20 15:08:06 : 1250798946*/
App::import('Controller', 'BaseballActionContactDetails');

class TestBaseballActionContactDetails extends BaseballActionContactDetailsController {
	var $autoRender = false;
}

class BaseballActionContactDetailsControllerTest extends CakeTestCase {
	var $BaseballActionContactDetails = null;

	function startTest() {
		$this->BaseballActionContactDetails = new TestBaseballActionContactDetails();
		$this->BaseballActionContactDetails->constructClasses();
	}

	function testBaseballActionContactDetailsControllerInstance() {
		$this->assertTrue(is_a($this->BaseballActionContactDetails, 'BaseballActionContactDetailsController'));
	}

	function endTest() {
		unset($this->BaseballActionContactDetails);
	}
}
?>