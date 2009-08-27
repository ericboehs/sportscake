<?php 
/* SVN FILE: $Id$ */
/* DocumentsMedium Test cases generated on: 2009-08-20 15:08:53 : 1250799053*/
App::import('Model', 'DocumentsMedium');

class DocumentsMediumTestCase extends CakeTestCase {
	var $DocumentsMedium = null;
	var $fixtures = array('app.documents_medium');

	function startTest() {
		$this->DocumentsMedium =& ClassRegistry::init('DocumentsMedium');
	}

	function testDocumentsMediumInstance() {
		$this->assertTrue(is_a($this->DocumentsMedium, 'DocumentsMedium'));
	}

	function testDocumentsMediumFind() {
		$this->DocumentsMedium->recursive = -1;
		$results = $this->DocumentsMedium->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('DocumentsMedium' => array(
			'id'  => 1,
			'document_id'  => 1,
			'media_id'  => 1,
			'media_caption_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>