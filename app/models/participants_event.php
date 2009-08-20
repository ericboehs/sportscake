<?php
class ParticipantsEvent extends AppModel {

	var $name = 'ParticipantsEvent';
	var $validate = array(
		'participant_type' => array('notempty'),
		'participant_id' => array('numeric'),
		'event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	// var $belongsTo = array(
	// 	'Participant' => array(
	// 		'className' => 'Participant',
	// 		'foreignKey' => 'participant_id',
	// 	),
	// 	'Event' => array(
	// 		'className' => 'Event',
	// 		'foreignKey' => 'event_id',
	// 	)
	// );
}
?>