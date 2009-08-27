<?php 
/* SVN FILE: $Id$ */
/* AffiliationsMedium Test cases generated on: 2009-08-20 15:08:10 : 1250798890*/
App::import('Model', 'AffiliationsMedium');

class AffiliationsMediumTestCase extends CakeTestCase {
	var $AffiliationsMedium = null;
	var $fixtures = array('app.affiliations_medium');

	function startTest() {
		$this->AffiliationsMedium =& ClassRegistry::init('AffiliationsMedium');
	}

	function testAffiliationsMediumInstance() {
		$this->assertTrue(is_a($this->AffiliationsMedium, 'AffiliationsMedium'));
	}

	function testAffiliationsMediumFind() {
		$this->AffiliationsMedium->recursive = -1;
		$results = $this->AffiliationsMedium->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AffiliationsMedium' => array(
			'affiliation_id'  => 1,
			'media_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>