<?php
class MotorRacingEventState extends AppModel {

	var $name = 'MotorRacingEventState';
	var $validate = array(
		'event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		)
	);
}
?>