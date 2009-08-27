<?php 
/* SVN FILE: $Id$ */
/* PersonsDocument Fixture generated on: 2009-08-20 15:08:00 : 1250799180*/

class PersonsDocumentFixture extends CakeTestFixture {
	var $name = 'PersonsDocument';
	var $fields = array(
		'person_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_per_doc_per_id__per_id' => array('column' => 'person_id', 'unique' => 0), 'FK_per_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $records = array(array(
		'person_id'  => 1,
		'document_id'  => 1
	));
}
?>