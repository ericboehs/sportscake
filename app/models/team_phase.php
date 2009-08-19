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
		),
		'StartSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'start_season_id',
		),
		'EndSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'end_season_id',
		),
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
		)
	);
}
?>