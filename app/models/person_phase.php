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
		),
/*		'Membership' => array(
			'className' => 'Membership',
			'foreignKey' => 'membership_id',
		),
*/
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
		),
		'RegularPosition' => array(
			'className' => 'Position',
			'foreignKey' => 'regular_position_id',
		),
		'StartSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'start_season_id',
		),
		'EndSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'end_season_id',
		)
	);
}
?>