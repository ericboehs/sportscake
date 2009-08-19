<?php
class EventState extends AppModel {

	var $name = 'EventState';
	var $validate = array(
		'id' => array('q'),
		'event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		)
	);

	var $hasOne = array(
		'EventActionFoul' => array(
			'className' => 'EventActionFoul',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
		),
		'EventActionPenalty' => array(
			'className' => 'EventActionPenalty',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
		),
		'EventActionPlay' => array(
			'className' => 'EventActionPlay',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
		),
		'EventActionSubstitution' => array(
			'className' => 'EventActionSubstitution',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
		)
	);

	var $hasMany = array(
		'EventActionFoul' => array(
			'className' => 'EventActionFoul',
			'foreignKey' => 'event_state_id',
			'dependent' => false
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'event_state_id',
			'dependent' => false
		),
		'EventActionPenalty' => array(
			'className' => 'EventActionPenalty',
			'foreignKey' => 'event_state_id',
			'dependent' => false
		),
		'EventActionPlay' => array(
			'className' => 'EventActionPlay',
			'foreignKey' => 'event_state_id',
			'dependent' => false
		),
		'EventActionSubstitution' => array(
			'className' => 'EventActionSubstitution',
			'foreignKey' => 'event_state_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'AmericanFootball' => array(
			'className' => 'AmericanFootball',
			'joinTable' => 'american_football_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'american_football_id',
			'unique' => true
		),
		'Baseball' => array(
			'className' => 'Baseball',
			'joinTable' => 'baseball_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'baseball_id',
			'unique' => true
		),
		'Basketball' => array(
			'className' => 'Basketball',
			'joinTable' => 'basketball_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'basketball_id',
			'unique' => true
		),
		'IceHockey' => array(
			'className' => 'IceHockey',
			'joinTable' => 'ice_hockey_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'ice_hockey_id',
			'unique' => true
		),
		'MotorRacing' => array(
			'className' => 'MotorRacing',
			'joinTable' => 'motor_racing_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'motor_racing_id',
			'unique' => true
		),
		'Soccer' => array(
			'className' => 'Soccer',
			'joinTable' => 'soccer_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'soccer_id',
			'unique' => true
		),
		'Tenni' => array(
			'className' => 'Tenni',
			'joinTable' => 'tennis_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'tenni_id',
			'unique' => true
		)
	);
}
?>