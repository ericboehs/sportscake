<?php 
/* SVN FILE: $Id$ */
/* Conference Test cases generated on: 2009-10-13 20:03:45 : 1255464225*/
App::import('Model', 'Conference');

class ConferenceTestCase extends CakeTestCase {
	var $Conference = null;
	var $fixtures = array('app.conference', 'app.league', 'app.division', 'app.division');

	function startTest() {
		$this->Conference =& ClassRegistry::init('Conference');
	}

	function testConferenceInstance() {
		$this->assertTrue(is_a($this->Conference, 'Conference'));
	}

	function testConferenceFind() {
		$this->Conference->recursive = -1;
		$results = $this->Conference->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Conference' => array(
			'id'  => 1,
			'conference_key'  => 'Lorem ipsum dolor sit amet',
			'league_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'shortname'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>