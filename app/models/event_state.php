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
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'EventActionFoul' => array(
			'className' => 'EventActionFoul',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventActionPenalty' => array(
			'className' => 'EventActionPenalty',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventActionPlay' => array(
			'className' => 'EventActionPlay',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventActionSubstitution' => array(
			'className' => 'EventActionSubstitution',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'EventActionFoul' => array(
			'className' => 'EventActionFoul',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventActionPenalty' => array(
			'className' => 'EventActionPenalty',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventActionPlay' => array(
			'className' => 'EventActionPlay',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventActionSubstitution' => array(
			'className' => 'EventActionSubstitution',
			'foreignKey' => 'event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'AmericanFootball' => array(
			'className' => 'AmericanFootball',
			'joinTable' => 'american_football_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'american_football_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Baseball' => array(
			'className' => 'Baseball',
			'joinTable' => 'baseball_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'baseball_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Basketball' => array(
			'className' => 'Basketball',
			'joinTable' => 'basketball_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'basketball_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'IceHockey' => array(
			'className' => 'IceHockey',
			'joinTable' => 'ice_hockey_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'ice_hockey_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'MotorRacing' => array(
			'className' => 'MotorRacing',
			'joinTable' => 'motor_racing_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'motor_racing_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Soccer' => array(
			'className' => 'Soccer',
			'joinTable' => 'soccer_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'soccer_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Tenni' => array(
			'className' => 'Tenni',
			'joinTable' => 'tennis_event_states',
			'foreignKey' => 'event_state_id',
			'associationForeignKey' => 'tenni_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>