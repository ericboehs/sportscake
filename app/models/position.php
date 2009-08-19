<?php
class Position extends AppModel {

	var $name = 'Position';
	var $validate = array(
		'affiliation_id' => array('numeric'),
		'abbreviation' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
		)
	);

	var $hasMany = array(
		'BaseballActionSubstitutionPersonOriginalPosition' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_original_position_id',
			'dependent' => false
		),
		'BaseballActionSubstitutionPersonReplacingPosition' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_replacing_position_id',
			'dependent' => false
		)
		'BaseballDefensivePlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'position_id',
			'dependent' => false
		),
		'CoreStat' => array(
			'className' => 'CoreStat',
			'foreignKey' => 'position_id',
			'dependent' => false
		),
		'SoccerActionSubstitutionPersonOriginalPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'position_id',
			'dependent' => false
		),
		'SoccerActionSubstitutionPersonReplacingPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'position_id',
			'dependent' => false
		)
	);
}
?>