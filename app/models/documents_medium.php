<?php
class DocumentsMedium extends AppModel {

	var $name = 'DocumentsMedium';
	var $validate = array(
		'document_id' => array('numeric'),
		'media_id' => array('numeric'),
		'media_caption_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		),
		'MediaCaption' => array(
			'className' => 'MediaCaption',
			'foreignKey' => 'media_caption_id',
		)
	);
}
?>