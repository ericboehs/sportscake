<?php
class BaseballDefensivePlayer extends AppModel {

	var $name = 'BaseballDefensivePlayer';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballDefensiveGroup' => array(
			'className' => 'BaseballDefensiveGroup',
			'foreignKey' => 'baseball_defensive_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Player' => array(
			'className' => 'Player',
			'foreignKey' => 'player_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>