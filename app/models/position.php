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
		),
		'BaseballDefensivePlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'position_id',
			'dependent' => false
		),
		'CoreStat' => array( //NOTE: There is no foreignKey in the db for this
			'className' => 'CoreStat',
			'foreignKey' => 'position_id',
			'dependent' => false
		),
		'EventActionSubstitutionOriginal' => array(
            'className' => 'EventActionSubstitution',
            'foreignKey' => 'person_original_position_id',
            'dependent' => false
        ),
		'EventActionSubstitutionReplacing' => array(
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
		'SoccerActionSubstitutionPersonOriginalPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_original_position_id',
			'dependent' => false
		),
		'SoccerActionSubstitutionPersonReplacingPosition' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_replacing_position_id',
			'dependent' => false
		)
	);
}
?>