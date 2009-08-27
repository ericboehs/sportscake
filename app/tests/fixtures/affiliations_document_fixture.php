<?php 
/* SVN FILE: $Id$ */
/* AffiliationsDocument Fixture generated on: 2009-08-20 15:08:04 : 1250798884*/

class AffiliationsDocumentFixture extends CakeTestFixture {
	var $name = 'AffiliationsDocument';
	var $fields = array(
		'affiliation_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_doc_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_aff_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $records = array(array(
		'affiliation_id'  => 1,
		'document_id'  => 1
	));
}
?>