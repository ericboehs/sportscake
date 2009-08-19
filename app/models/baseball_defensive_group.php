<?php
class BaseballDefensiveGroup extends AppModel {

	var $name = 'BaseballDefensiveGroup';
	var $useTable = 'baseball_defensive_group';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'BaseballActionPitch' => array(
			'className' => 'BaseballActionPitch',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false
		),
		'BaseballActionPlay' => array(
			'className' => 'BaseballActionPlay',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false
		),
		'BaseballDefensivePlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'baseball_defensive_group_id',
			'dependent' => false
		)
	);
}
?>