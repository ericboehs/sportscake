<?php
class SoccerEventState extends AppModel {

	var $name = 'SoccerEventState';
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

	var $hasMany = array(
		'SoccerActionFoul' => array(
			'className' => 'SoccerActionFoul',
			'foreignKey' => 'soccer_event_state_id',
			'dependent' => false
		),
		'SoccerActionPenalty' => array(
			'className' => 'SoccerActionPenalty',
			'foreignKey' => 'soccer_event_state_id',
			'dependent' => false
		),
		'SoccerActionPlay' => array(
			'className' => 'SoccerActionPlay',
			'foreignKey' => 'soccer_event_state_id',
			'dependent' => false
		),
		'SoccerActionSubstitution' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'soccer_event_state_id',
			'dependent' => false
		)
	);
}
?>