<?php 
/* SVN FILE: $Id$ */
/* Sport Test cases generated on: 2009-10-09 07:05:06 : 1255071906*/
App::import('Model', 'Sport');

class SportTestCase extends CakeTestCase {
	var $Sport = null;
	var $fixtures = array('app.sport', 'app.league');

	function startTest() {
		$this->Sport =& ClassRegistry::init('Sport');
	}

	function testSportInstance() {
		$this->assertTrue(is_a($this->Sport, 'Sport'));
	}

	function testSportFind() {
		$this->Sport->recursive = -1;
		$results = $this->Sport->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Sport' => array(
			'id'  => 1,
			'sport_key'  => 'Lorem ipsum dolor sit amet',
			'name'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>