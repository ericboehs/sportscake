<?php
class BaseballEventState extends AppModel {

	var $name = 'BaseballEventState';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RunnerOnFirst' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_first_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RunnerOnSecond' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_second_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RunnerOnThird' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_third_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pitcher' => array(
			'className' => 'Pitcher',
			'foreignKey' => 'pitcher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Batter' => array(
			'className' => 'Batter',
			'foreignKey' => 'batter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BaseballActionSubstitution' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_event_state_id',
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
		'BaseballActionSubstitution' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'baseball_event_state_id',
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