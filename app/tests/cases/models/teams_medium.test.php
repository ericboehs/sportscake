<?php 
/* SVN FILE: $Id$ */
/* TeamsMedium Test cases generated on: 2009-08-20 15:08:56 : 1250799236*/
App::import('Model', 'TeamsMedium');

class TeamsMediumTestCase extends CakeTestCase {
	var $TeamsMedium = null;
	var $fixtures = array('app.teams_medium');

	function startTest() {
		$this->TeamsMedium =& ClassRegistry::init('TeamsMedium');
	}

	function testTeamsMediumInstance() {
		$this->assertTrue(is_a($this->TeamsMedium, 'TeamsMedium'));
	}

	function testTeamsMediumFind() {
		$this->TeamsMedium->recursive = -1;
		$results = $this->TeamsMedium->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('TeamsMedium' => array(
			'team_id'  => 1,
			'media_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>