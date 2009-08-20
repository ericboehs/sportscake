<?php
class ParticipantsEvent extends AppModel {

	var $name = 'ParticipantsEvent';
	var $validate = array(
		'participant_type' => array('notempty'),
		'participant_id' => array('numeric'),
		'event_id' => array('numeric')
	);

	var $hasMany = array(
		'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'participant_event_id'
		)
	);
	var $belongsTo = array(
		// 'Participant' => array(
		// 	'className' => 'Participant',
		// 	'foreignKey' => 'participant_id'
		// ),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id'
		)
	);
}
?>