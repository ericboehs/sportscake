<?php
class IceHockeyActionPlay extends AppModel {

	var $name = 'IceHockeyActionPlay';
	var $validate = array(
		'ice_hockey_event_state_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'IceHockeyEventState' => array(
			'className' => 'IceHockeyEventState',
			'foreignKey' => 'ice_hockey_event_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'IceHockeyActionParticipant' => array(
			'className' => 'IceHockeyActionParticipant',
			'foreignKey' => 'ice_hockey_action_play_id',
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

}
?>