<?php 
/* SVN FILE: $Id$ */
/* AffiliationsMediaController Test cases generated on: 2009-08-20 15:08:10 : 1250798890*/
App::import('Controller', 'AffiliationsMedia');

class TestAffiliationsMedia extends AffiliationsMediaController {
	var $autoRender = false;
}

class AffiliationsMediaControllerTest extends CakeTestCase {
	var $AffiliationsMedia = null;

	function startTest() {
		$this->AffiliationsMedia = new TestAffiliationsMedia();
		$this->AffiliationsMedia->constructClasses();
	}

	function testAffiliationsMediaControllerInstance() {
		$this->assertTrue(is_a($this->AffiliationsMedia, 'AffiliationsMediaController'));
	}

	function endTest() {
		unset($this->AffiliationsMedia);
	}
}
?>