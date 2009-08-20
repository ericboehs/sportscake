<?php
class BaseballEventState extends AppModel {

	var $name = 'BaseballEventState';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'RunnerOnFirst' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_first_id',
		),
		'RunnerOnSecond' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_second_id',
		),
		'RunnerOnThird' => array(
			'className' => 'Person',
			'foreignKey' => 'runner_on_third_id',
		),
		'Pitcher' => array(
			'className' => 'Person',
			'foreignKey' => 'pitcher_id',
		),
		'Batter' => array(
			'className' => 'Person',
			'foreignKey' => 'batter_id',
		)
	);

	var $hasOne = array(
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false,
		),
		'BaseballActionSubstitution' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false,
		)
	);

	var $hasMany = array(
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false
		),
		'BaseballActionSubstitution' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'baseball_event_state_id',
			'dependent' => false
		)
	);
}
?>