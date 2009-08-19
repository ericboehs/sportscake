<?php
class SoccerActionSubstitution extends AppModel {

	var $name = 'SoccerActionSubstitution';
	var $validate = array(
		'soccer_event_state_id' => array('numeric'),
		'person_original_id' => array('numeric'),
		'person_original_position_id' => array('numeric'),
		'person_replacing_id' => array('numeric'),
		'person_replacing_position_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SoccerEventState' => array(
			'className' => 'SoccerEventState',
			'foreignKey' => 'soccer_event_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonOriginal' => array(
			'className' => 'Person',
			'foreignKey' => 'person_original_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonOriginalPosition' => array(
			'className' => 'Position',
			'foreignKey' => 'person_original_position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonReplacing' => array(
			'className' => 'Person',
			'foreignKey' => 'person_replacing_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonReplacingPosition' => array(
			'className' => 'Position',
			'foreignKey' => 'person_replacing_position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>