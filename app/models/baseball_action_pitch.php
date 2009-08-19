<?php
class BaseballActionPitch extends AppModel {

	var $name = 'BaseballActionPitch';
	var $validate = array(
		'baseball_action_play_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_action_play_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BaseballDefensiveGroup' => array(
			'className' => 'BaseballDefensiveGroup',
			'foreignKey' => 'baseball_defensive_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'BaseballActionContactDetail' => array(
			'className' => 'BaseballActionContactDetail',
			'foreignKey' => 'baseball_action_pitch_id',
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