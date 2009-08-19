<?php
class EventsDocument extends AppModel {

	var $name = 'EventsDocument';
	var $validate = array(
		'event_id' => array('numeric'),
		'document_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
		)
	);
}
?>