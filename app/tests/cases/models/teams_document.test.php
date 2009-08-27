<?php 
/* SVN FILE: $Id$ */
/* TeamsDocument Test cases generated on: 2009-08-20 15:08:54 : 1250799234*/
App::import('Model', 'TeamsDocument');

class TeamsDocumentTestCase extends CakeTestCase {
	var $TeamsDocument = null;
	var $fixtures = array('app.teams_document');

	function startTest() {
		$this->TeamsDocument =& ClassRegistry::init('TeamsDocument');
	}

	function testTeamsDocumentInstance() {
		$this->assertTrue(is_a($this->TeamsDocument, 'TeamsDocument'));
	}

	function testTeamsDocumentFind() {
		$this->TeamsDocument->recursive = -1;
		$results = $this->TeamsDocument->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('TeamsDocument' => array(
			'team_id'  => 1,
			'document_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>