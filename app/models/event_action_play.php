<?php
class EventActionPlay extends AppModel {

	var $name = 'EventActionPlay';
	var $validate = array(
		'event_state_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'EventState' => array(
			'className' => 'EventState',
			'foreignKey' => 'event_state_id',
		)
	);

	var $hasMany = array(
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'event_action_play_id',
			'dependent' => false
		)
	);
}
?>