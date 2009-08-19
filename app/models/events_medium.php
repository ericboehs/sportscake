<?php
class EventsMedium extends AppModel {

	var $name = 'EventsMedium';
	var $validate = array(
		'event_id' => array('numeric'),
		'media_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		)
	);
}
?>