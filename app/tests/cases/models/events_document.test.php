<?php 
/* SVN FILE: $Id$ */
/* EventsDocument Test cases generated on: 2009-08-20 15:08:14 : 1250799074*/
App::import('Model', 'EventsDocument');

class EventsDocumentTestCase extends CakeTestCase {
	var $EventsDocument = null;
	var $fixtures = array('app.events_document');

	function startTest() {
		$this->EventsDocument =& ClassRegistry::init('EventsDocument');
	}

	function testEventsDocumentInstance() {
		$this->assertTrue(is_a($this->EventsDocument, 'EventsDocument'));
	}

	function testEventsDocumentFind() {
		$this->EventsDocument->recursive = -1;
		$results = $this->EventsDocument->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EventsDocument' => array(
			'event_id'  => 1,
			'document_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>