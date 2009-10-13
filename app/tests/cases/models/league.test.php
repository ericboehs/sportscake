<?php 
/* SVN FILE: $Id$ */
/* League Test cases generated on: 2009-10-09 07:09:50 : 1255072190*/
App::import('Model', 'League');

class LeagueTestCase extends CakeTestCase {
	var $League = null;
	var $fixtures = array('app.league', 'app.sport', 'app.conference', 'app.season');

	function startTest() {
		$this->League =& ClassRegistry::init('League');
	}

	function testLeagueInstance() {
		$this->assertTrue(is_a($this->League, 'League'));
	}

	function testLeagueFind() {
		$this->League->recursive = -1;
		$results = $this->League->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('League' => array(
			'id'  => 1,
			'league_key'  => 'Lorem ipsum dolor sit amet',
			'sport_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'nickname'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>