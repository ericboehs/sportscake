<?php 
/* SVN FILE: $Id$ */
/* EventsDocument Fixture generated on: 2009-08-20 15:08:14 : 1250799074*/

class EventsDocumentFixture extends CakeTestFixture {
	var $name = 'EventsDocument';
	var $fields = array(
		'event_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_eve_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0), 'FK_eve_doc_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $records = array(array(
		'event_id'  => 1,
		'document_id'  => 1
	));
}
?>