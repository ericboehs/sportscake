<?php 
/* SVN FILE: $Id$ */
/* LatestRevisionsController Test cases generated on: 2009-08-20 15:08:08 : 1250799128*/
App::import('Controller', 'LatestRevisions');

class TestLatestRevisions extends LatestRevisionsController {
	var $autoRender = false;
}

class LatestRevisionsControllerTest extends CakeTestCase {
	var $LatestRevisions = null;

	function startTest() {
		$this->LatestRevisions = new TestLatestRevisions();
		$this->LatestRevisions->constructClasses();
	}

	function testLatestRevisionsControllerInstance() {
		$this->assertTrue(is_a($this->LatestRevisions, 'LatestRevisionsController'));
	}

	function endTest() {
		unset($this->LatestRevisions);
	}
}
?>