<?php
class BaseballActionPlay extends AppModel {

	var $name = 'BaseballActionPlay';
	var $validate = array(
		'baseball_event_state_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballEventState' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'baseball_event_state_id',
		),
		'BaseballDefensiveGroup' => array(
			'className' => 'BaseballDefensiveGroup',
			'foreignKey' => 'baseball_defensive_group_id',
		)
	);

	var $hasMany = array(
		'BaseballActionPitch' => array(
			'className' => 'BaseballActionPitch',
			'foreignKey' => 'baseball_action_play_id',
			'dependent' => false
		)
	);
}
?>