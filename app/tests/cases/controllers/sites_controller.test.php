<?php 
/* SVN FILE: $Id$ */
/* SitesController Test cases generated on: 2009-08-20 15:08:16 : 1250799196*/
App::import('Controller', 'Sites');

class TestSites extends SitesController {
	var $autoRender = false;
}

class SitesControllerTest extends CakeTestCase {
	var $Sites = null;

	function startTest() {
		$this->Sites = new TestSites();
		$this->Sites->constructClasses();
	}

	function testSitesControllerInstance() {
		$this->assertTrue(is_a($this->Sites, 'SitesController'));
	}

	function endTest() {
		unset($this->Sites);
	}
}
?>