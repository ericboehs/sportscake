<?php
class EventActionSubstitution extends AppModel {

	var $name = 'EventActionSubstitution';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'EventState' => array(
			'className' => 'EventState',
			'foreignKey' => 'event_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonOriginal' => array(
			'className' => 'PersonOriginal',
			'foreignKey' => 'person_original_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonOriginalPosition' => array(
			'className' => 'PersonOriginalPosition',
			'foreignKey' => 'person_original_position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonReplacing' => array(
			'className' => 'PersonReplacing',
			'foreignKey' => 'person_replacing_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonReplacingPosition' => array(
			'className' => 'PersonReplacingPosition',
			'foreignKey' => 'person_replacing_position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>