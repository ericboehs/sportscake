<?php 
/* SVN FILE: $Id$ */
/* AffiliationsEvent Test cases generated on: 2009-08-20 15:08:07 : 1250798887*/
App::import('Model', 'AffiliationsEvent');

class AffiliationsEventTestCase extends CakeTestCase {
	var $AffiliationsEvent = null;
	var $fixtures = array('app.affiliations_event');

	function startTest() {
		$this->AffiliationsEvent =& ClassRegistry::init('AffiliationsEvent');
	}

	function testAffiliationsEventInstance() {
		$this->assertTrue(is_a($this->AffiliationsEvent, 'AffiliationsEvent'));
	}

	function testAffiliationsEventFind() {
		$this->AffiliationsEvent->recursive = -1;
		$results = $this->AffiliationsEvent->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AffiliationsEvent' => array(
			'affiliation_id'  => 1,
			'event_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>