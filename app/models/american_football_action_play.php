<?php
class AmericanFootballActionPlay extends AppModel {

	var $name = 'AmericanFootballActionPlay';
	var $validate = array(
		'american_football_event_state_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'AmericanFootballEventState' => array(
			'className' => 'AmericanFootballEventState',
			'foreignKey' => 'american_football_event_state_id',
		)
	);

	var $hasMany = array(
		'AmericanFootballActionParticipant' => array(
			'className' => 'AmericanFootballActionParticipant',
			'foreignKey' => 'american_football_action_play_id',
			'dependent' => false
		)
	);
}
?>