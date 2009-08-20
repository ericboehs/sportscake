<?php
class Season extends AppModel {

	var $name = 'Season';
	var $validate = array(
		'season_key' => array('numeric'),
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'League' => array(
			'className' => 'Affiliations',
			'foreignKey' => 'league_id',
		)
	);

	var $hasMany = array(
		'InjuryPhase' => array(
			'className' => 'InjuryPhase',
			'foreignKey' => 'season_id',
			'dependent' => false
		),

		'StartTeamPhase' => array(
            'className' => 'TeamPhase',
            'foreignKey' => 'start_season_id',
            'dependent' => false
        ),
		'EndTeamPhase' => array(
            'className' => 'TeamPhase',
            'foreignKey' => 'end_season_id',
            'dependent' => false
        ),

		'AffiliationPhaseStart' => array(
			'className' => 'AffiliationPhase',
			'foreignKey' => 'start_season_id',
			'dependent' => false
		),
		'AffiliationPhaseEnd' => array(
			'className' => 'AffiliationPhase',
			'foreignKey' => 'end_season_id',
			'dependent' => false
		),
        'EventsSubSeason' => array(
            'className' => 'EventsSubSeason',
            'foreignKey' => 'season_id'
        ),
        'SubSeason' => array(
            'className' => 'SubSeason',
            'foreignKey' => 'season_id'
        )
	);

}
?>