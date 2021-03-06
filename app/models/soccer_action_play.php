<?php
class SoccerActionPlay extends AppModel {

	var $name = 'SoccerActionPlay';
	var $validate = array(
		'soccer_event_state_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SoccerEventState' => array(
			'className' => 'SoccerEventState',
			'foreignKey' => 'soccer_event_state_id',
		)
	);

	var $hasMany = array(
		'SoccerActionParticipant' => array(
			'className' => 'SoccerActionParticipant',
			'foreignKey' => 'soccer_action_play_id',
			'dependent' => false
		)
	);
/*	
	var $hasAndBelongsToMany = array(
	   'SoccerActionParticipant' => array(
            'className' => 'SoccerActionParticipant',
            'foreignKey' => 'soccer_action_play_id',
            'dependent' => false
        )
	);
*/
}
?>