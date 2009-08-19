<?php
class BaseballDefensivePlayer extends AppModel {

	var $name = 'BaseballDefensivePlayer';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballDefensiveGroup' => array(
			'className' => 'BaseballDefensiveGroup',
			'foreignKey' => 'baseball_defensive_group_id',
		),
		'Player' => array(
			'className' => 'Person',
			'foreignKey' => 'player_id',
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
		)
	);
}
?>