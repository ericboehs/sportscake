<?php
class MediaKeyword extends AppModel {

	var $name = 'MediaKeyword';
	var $validate = array(
		'media_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		)
	);
}
?>