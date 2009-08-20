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
		'BaseballActionSubstitution.PersonOriginalPosition' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_original_position_id',
			'dependent' => false
		),
		'BaseballActionSubstitution.PersonReplacingPosition' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_replacing_position_id',
			'dependent' => false
		),
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
		'EventActionSubstitution.Original' => array(
            'className' => 'EventActionSubstitution',
            'foreignKey' => 'person_original_position_id',
            'dependent' => false
        ),
		'EventActionSubstitution.Replaceing' => array(
            'className' => 'EventActionSubstitution',
            'foreignKey' => 'person_replacing_position_id',
			'dependent' => false
        ),
        'PersonPhase' => array(
            'className' => 'PersonPhase',
            'foreignKey' => 'start_season_id',
            'dependent' => false
        ),
		'PersonEventMetadatum' => array(
            'className' => 'PersonEventMetadatum',
            'foreignKey' => 'position_id',
            'dependent' => false
        ),
		'SoccerActionSubstitution.PersonOriginalPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_original_position_id',
			'dependent' => false
		),
		'SoccerActionSubstitution.PersonReplacingPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_replacing_position_id',
			'dependent' => false
		)
	);
}
?>