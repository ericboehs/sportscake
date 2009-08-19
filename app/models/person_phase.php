<?php
class PersonPhase extends AppModel {

	var $name = 'PersonPhase';
	var $validate = array(
		'person_id' => array('numeric'),
		'membership_type' => array('notempty'),
		'membership_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Membership' => array(
			'className' => 'Membership',
			'foreignKey' => 'membership_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RegularPosition' => array(
			'className' => 'RegularPosition',
			'foreignKey' => 'regular_position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StartSeason' => array(
			'className' => 'StartSeason',
			'foreignKey' => 'start_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EndSeason' => array(
			'className' => 'EndSeason',
			'foreignKey' => 'end_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>