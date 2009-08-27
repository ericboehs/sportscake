<?php 
/* SVN FILE: $Id$ */
/* DocumentsMedium Fixture generated on: 2009-08-20 15:08:53 : 1250799053*/

class DocumentsMediumFixture extends CakeTestFixture {
	var $name = 'DocumentsMedium';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_caption_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_doc_med_med_cap_id__med_cap_id' => array('column' => 'media_caption_id', 'unique' => 0), 'FK_doc_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_doc_med_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'document_id'  => 1,
		'media_id'  => 1,
		'media_caption_id'  => 1
	));
}
?>