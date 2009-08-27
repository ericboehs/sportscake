<?php 
/* SVN FILE: $Id$ */
/* OutcomeTotalsController Test cases generated on: 2009-08-20 15:08:45 : 1250799165*/
App::import('Controller', 'OutcomeTotals');

class TestOutcomeTotals extends OutcomeTotalsController {
	var $autoRender = false;
}

class OutcomeTotalsControllerTest extends CakeTestCase {
	var $OutcomeTotals = null;

	function startTest() {
		$this->OutcomeTotals = new TestOutcomeTotals();
		$this->OutcomeTotals->constructClasses();
	}

	function testOutcomeTotalsControllerInstance() {
		$this->assertTrue(is_a($this->OutcomeTotals, 'OutcomeTotalsController'));
	}

	function endTest() {
		unset($this->OutcomeTotals);
	}
}
?>