<?php 
/* SVN FILE: $Id$ */
/* PersonsDocument Test cases generated on: 2009-08-20 15:08:00 : 1250799180*/
App::import('Model', 'PersonsDocument');

class PersonsDocumentTestCase extends CakeTestCase {
	var $PersonsDocument = null;
	var $fixtures = array('app.persons_document');

	function startTest() {
		$this->PersonsDocument =& ClassRegistry::init('PersonsDocument');
	}

	function testPersonsDocumentInstance() {
		$this->assertTrue(is_a($this->PersonsDocument, 'PersonsDocument'));
	}

	function testPersonsDocumentFind() {
		$this->PersonsDocument->recursive = -1;
		$results = $this->PersonsDocument->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('PersonsDocument' => array(
			'person_id'  => 1,
			'document_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>