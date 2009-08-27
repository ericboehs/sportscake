<?php 
/* SVN FILE: $Id$ */
/* TeamsDocument Fixture generated on: 2009-08-20 15:08:54 : 1250799234*/

class TeamsDocumentFixture extends CakeTestFixture {
	var $name = 'TeamsDocument';
	var $fields = array(
		'team_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_tea_doc_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_tea_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $records = array(array(
		'team_id'  => 1,
		'document_id'  => 1
	));
}
?>