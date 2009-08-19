<?php
class BaseballDefensiveGroup extends AppModel {

	var $name = 'BaseballDefensiveGroup';
	var $useTable = 'baseball_defensive_group';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'BaseballActionPitch' => array(
			'className' => 'BaseballActionPitch',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BaseballDefensivePlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'BaseballActionPitch' => array(
			'className' => 'BaseballActionPitch',
			'foreignKey' => 'baseball_defensive_group_id',
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
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_defensive_group_id',
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
		'BaseballDefensivePlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'baseball_defensive_group_id',
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