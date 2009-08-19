<?php
class EventActionParticipant extends AppModel {

	var $name = 'EventActionParticipant';
	var $validate = array(
		'event_state_id' => array('numeric'),
		'event_action_play_id' => array('numeric'),
		'person_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'EventState' => array(
			'className' => 'EventState',
			'foreignKey' => 'event_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventActionPlay' => array(
			'className' => 'EventActionPlay',
			'foreignKey' => 'event_action_play_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>