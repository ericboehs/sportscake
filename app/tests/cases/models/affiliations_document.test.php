<?php 
/* SVN FILE: $Id$ */
/* AffiliationsDocument Test cases generated on: 2009-08-20 15:08:04 : 1250798884*/
App::import('Model', 'AffiliationsDocument');

class AffiliationsDocumentTestCase extends CakeTestCase {
	var $AffiliationsDocument = null;
	var $fixtures = array('app.affiliations_document');

	function startTest() {
		$this->AffiliationsDocument =& ClassRegistry::init('AffiliationsDocument');
	}

	function testAffiliationsDocumentInstance() {
		$this->assertTrue(is_a($this->AffiliationsDocument, 'AffiliationsDocument'));
	}

	function testAffiliationsDocumentFind() {
		$this->AffiliationsDocument->recursive = -1;
		$results = $this->AffiliationsDocument->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AffiliationsDocument' => array(
			'affiliation_id'  => 1,
			'document_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>