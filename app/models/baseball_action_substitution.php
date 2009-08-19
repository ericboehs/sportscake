<?php
class BaseballActionSubstitution extends AppModel {

	var $name = 'BaseballActionSubstitution';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballEventState' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'baseball_event_state_id',
		),
		'PersonOriginal' => array(
			'className' => 'Person',
			'foreignKey' => 'person_original_id',
		),
		'PersonOriginalPosition' => array(
			'className' => 'Position',
			'foreignKey' => 'person_original_position_id',
		),
		'PersonReplacing' => array(
			'className' => 'Person',
			'foreignKey' => 'person_replacing_id',
		),
		'PersonReplacingPosition' => array(
			'className' => 'Position',
			'foreignKey' => 'person_replacing_position_id',
		)
	);
}
?>