<?php 
/* SVN FILE: $Id$ */
/* Season Test cases generated on: 2009-10-09 07:06:25 : 1255071985*/
App::import('Model', 'Season');

class SeasonTestCase extends CakeTestCase {
	var $Season = null;
	var $fixtures = array('app.season', 'app.publisher', 'app.league', 'app.injury_phase', 'app.injury_phase');

	function startTest() {
		$this->Season =& ClassRegistry::init('Season');
	}

	function testSeasonInstance() {
		$this->assertTrue(is_a($this->Season, 'Season'));
	}

	function testSeasonFind() {
		$this->Season->recursive = -1;
		$results = $this->Season->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Season' => array(
			'id'  => 1,
			'season_key'  => 'Lorem ipsum dolor sit amet',
			'name'  => 'Lorem ipsum dolor sit amet',
			'publisher_id'  => 1,
			'league_id'  => 1,
			'start_date_time'  => '2009-10-09 07:06:25',
			'end_date_time'  => '2009-10-09 07:06:25'
		));
		$this->assertEqual($results, $expected);
	}
}
?>