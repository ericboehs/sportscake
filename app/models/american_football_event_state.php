<?php
class AmericanFootballEventState extends AppModel {

	var $name = 'AmericanFootballEventState';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'Team' => array( 
			'className' => 'Team',
			'foreignKey' => 'team_in_possession_id',
		)
	);

	var $hasMany = array(
		'AmericanFootballActionPlay' => array(
			'className' => 'AmericanFootballActionPlay',
			'foreignKey' => 'american_football_event_state_id',
			'dependent' => false
		)
	);
}
?>