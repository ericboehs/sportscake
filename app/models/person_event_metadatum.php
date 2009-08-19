<?php
class PersonEventMetadatum extends AppModel {

	var $name = 'PersonEventMetadatum';
	var $validate = array(
		'person_id' => array('numeric'),
		'event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
		)
	);
}
?>