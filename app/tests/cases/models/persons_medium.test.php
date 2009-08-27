<?php 
/* SVN FILE: $Id$ */
/* PersonsMedium Test cases generated on: 2009-08-20 15:08:02 : 1250799182*/
App::import('Model', 'PersonsMedium');

class PersonsMediumTestCase extends CakeTestCase {
	var $PersonsMedium = null;
	var $fixtures = array('app.persons_medium');

	function startTest() {
		$this->PersonsMedium =& ClassRegistry::init('PersonsMedium');
	}

	function testPersonsMediumInstance() {
		$this->assertTrue(is_a($this->PersonsMedium, 'PersonsMedium'));
	}

	function testPersonsMediumFind() {
		$this->PersonsMedium->recursive = -1;
		$results = $this->PersonsMedium->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('PersonsMedium' => array(
			'person_id'  => 1,
			'media_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>