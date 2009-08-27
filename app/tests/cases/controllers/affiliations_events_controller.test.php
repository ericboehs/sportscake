<?php 
/* SVN FILE: $Id$ */
/* AffiliationsEventsController Test cases generated on: 2009-08-20 15:08:07 : 1250798887*/
App::import('Controller', 'AffiliationsEvents');

class TestAffiliationsEvents extends AffiliationsEventsController {
	var $autoRender = false;
}

class AffiliationsEventsControllerTest extends CakeTestCase {
	var $AffiliationsEvents = null;

	function startTest() {
		$this->AffiliationsEvents = new TestAffiliationsEvents();
		$this->AffiliationsEvents->constructClasses();
	}

	function testAffiliationsEventsControllerInstance() {
		$this->assertTrue(is_a($this->AffiliationsEvents, 'AffiliationsEventsController'));
	}

	function endTest() {
		unset($this->AffiliationsEvents);
	}
}
?>