<?php 
/* SVN FILE: $Id$ */
/* EventsMedium Test cases generated on: 2009-08-20 15:08:31 : 1250799091*/
App::import('Model', 'EventsMedium');

class EventsMediumTestCase extends CakeTestCase {
	var $EventsMedium = null;
	var $fixtures = array('app.events_medium');

	function startTest() {
		$this->EventsMedium =& ClassRegistry::init('EventsMedium');
	}

	function testEventsMediumInstance() {
		$this->assertTrue(is_a($this->EventsMedium, 'EventsMedium'));
	}

	function testEventsMediumFind() {
		$this->EventsMedium->recursive = -1;
		$results = $this->EventsMedium->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EventsMedium' => array(
			'event_id'  => 1,
			'media_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>