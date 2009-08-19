<?php
class MediaCaption extends AppModel {

	var $name = 'MediaCaption';
	var $validate = array(
		'media_id' => array('numeric'),
		'caption_author_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		),
		'CaptionAuthor' => array(
			'className' => 'CaptionAuthor',
			'foreignKey' => 'caption_author_id',
		)
	);

	var $hasMany = array(
		'DocumentsMedium' => array(
			'className' => 'DocumentsMedium',
			'foreignKey' => 'media_caption_id',
			'dependent' => false
		)
	);
}
?>