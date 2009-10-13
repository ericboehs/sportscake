<?php 
/* SVN FILE: $Id$ */
/* Division Test cases generated on: 2009-10-09 07:13:35 : 1255072415*/
App::import('Model', 'Division');

class DivisionTestCase extends CakeTestCase {
	var $Division = null;
	var $fixtures = array('app.division', 'app.conference');

	function startTest() {
		$this->Division =& ClassRegistry::init('Division');
	}

	function testDivisionInstance() {
		$this->assertTrue(is_a($this->Division, 'Division'));
	}

	function testDivisionFind() {
		$this->Division->recursive = -1;
		$results = $this->Division->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Division' => array(
			'id'  => 1,
			'division_key'  => 'Lorem ipsum dolor sit amet',
			'conference_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'active'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>