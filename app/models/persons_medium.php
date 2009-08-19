<?php
class PersonsMedium extends AppModel {

	var $name = 'PersonsMedium';
	var $validate = array(
		'person_id' => array('numeric'),
		'media_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		)
	);
}
?>