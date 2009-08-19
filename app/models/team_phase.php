<?php
class TeamPhase extends AppModel {

	var $name = 'TeamPhase';
	var $validate = array(
		'team_id' => array('numeric'),
		'affiliation_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
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
		),
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
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
		)
	);

}
?>