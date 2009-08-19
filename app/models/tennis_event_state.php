<?php
class TennisEventState extends AppModel {

	var $name = 'TennisEventState';
	var $validate = array(
		'event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'ServerPerson' => array(
			'className' => 'ServerPerson',
			'foreignKey' => 'server_person_id',
		),
		'ReceiverPerson' => array(
			'className' => 'ReceiverPerson',
			'foreignKey' => 'receiver_person_id',
		)
	);
}
?>