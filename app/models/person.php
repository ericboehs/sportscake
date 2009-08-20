<?php
class Person extends AppModel {

	var $name = 'Person';
	var $useTable = 'persons';
	var $validate = array(
		'person_key' => array('notempty'),
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'BirthLocation' => array(
			'className' => 'Location',
			'foreignKey' => 'birth_location_id',
		),
		'HometownLocation' => array(
			'className' => 'Location',
			'foreignKey' => 'hometown_location_id',
		),
		'ResidenceLocation' => array(
			'className' => 'Location',
			'foreignKey' => 'residence_location_id',
		),
		'DeathLocation' => array(
			'className' => 'Location',
			'foreignKey' => 'death_location_id',
		)
	);
/*
	var $hasOne = array(
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'IceHockeyActionParticipant' => array(
			'className' => 'IceHockeyActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'InjuryPhase' => array(
			'className' => 'InjuryPhase',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'PersonPhase' => array(
			'className' => 'PersonPhase',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
	);
*/
	var $hasMany = array(
		'AmericanFootballActionParticipant' => array(
			'className' => 'AmericanFootballActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'BaseballActionSubstitution.PersonOriginal' => array(
			'className' => 'BaseballActionSubstituion',
			'foreignKey' => 'person_original_id',
			'dependent' => false
		),
		'BaseballActionSubstitution.PersonReplacing' => array(
			'className' => 'BaseballActionSubstituion',
			'foreignKey' => 'person_original_id',
			'dependent' => false
		),
		'BaseballDefensivePlayer.Player' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'player_id',
			'dependent' => false
		),
		'BaseballEventState.Batter' => array(
            'className' => 'Person',
            'foreignKey' => 'batter_id',
        ),
		'BaseballEventState.Pitcher' => array(
            'className' => 'Person',
            'foreignKey' => 'pitcher_id',
        ),
		'BaseballEventState.RunnerOnFirst' => array(
            'className' => 'Person',
            'foreignKey' => 'runner_on_first_id',
        ),
        'BaseballEventState.RunnerOnSecond' => array(
            'className' => 'Person',
            'foreignKey' => 'runner_on_second_id',
        ),
        'BaseballEventState.RunnerOnThird' => array(
            'className' => 'Person',
            'foreignKey' => 'runner_on_third_id',
        ),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'EventActionSubstitution.PersonOriginal' => array(
            'className' => 'EventActionSubstitution',
            'foreignKey' => 'person_original_id',
        ),
        'EventActionSubstitution.PersonReplacing' => array(
            'className' => 'EventActionSubstitution',
            'foreignKey' => 'person_replacing_id',
        ),
		'IceHockeyActionParticipant' => array(
			'className' => 'IceHockeyActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'InjuryPhase' => array(
			'className' => 'InjuryPhase',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'Media' => array(
            'className' => 'Media',
            'foreignKey' => 'credit_id',
        ),
		'MediaCaption' => array(
            'className' => 'Person',
            'foreignKey' => 'caption_author_id',
        ),
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'PersonPhase' => array(
			'className' => 'PersonPhase',
			'foreignKey' => 'person_id',
			'dependent' => false
		),

		'Ranking' => array(
            'className' => 'Ranking',
            'foreignKey' => 'participant_id',
        ),
		'Record' => array(
            'className' => 'Record',
			'foreignKey' => 'participant_id',
			'dependent' => false,
		),
		
		'SoccerActionFoul.Fouler' => array(
            'className' => 'SoccerActionFoul',
            'foreignKey' => 'fouler_id',
			'dependent' => false,
        ),
        'SoccerActionFoul.Recipient' => array(
            'className' => 'SoccerActionFoul',
            'foreignKey' => 'recipient_id',
			'dependent' => false,
        ),
		
		'SoccerActionParticipant' => array(
			'className' => 'SoccerActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'SoccerActionPenalty' => array(
            'className' => 'SoccerActionPenalty',
            'foreignKey' => 'recipient_id',
            'dependent' => false
        ),
		'SoccerActionSubstitution.Original' => array(
            'className' => 'SoccerActionSubstitution',
            'foreignKey' => 'person_original_id',
            'dependent' => false
        ),
		'SoccerActionSubstitution.Replaceing' => array(
            'className' => 'SoccerActionSubstitution',
            'foreignKey' => 'person_replaceing_id',
            'dependent' => false
        ),

		'TennisEventState.ServerPerson' => array(
            'className' => 'TennisEventState',
            'foreignKey' => 'server_person_id',
        ),
        'TennisEventState.ReceiverPerson' => array(
            'className' => 'TennisEventState',
            'foreignKey' => 'receiver_person_id',
        ),
		
		'WageringMoneyline' => array(
			'className' => 'WageringMoneyline',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'WageringOddsLine' => array(
			'className' => 'WageringOddsLine',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'WageringRunline' => array(
			'className' => 'WageringRunline',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'WageringStraightSpreadLine' => array(
			'className' => 'WageringStraightSpreadLine',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'WageringTotalScoreLine' => array(
			'className' => 'WageringTotalScoreLine',
			'foreignKey' => 'person_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'persons_documents',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'document_id',
			'unique' => true
		),
		'Media' => array(
			'className' => 'Media',
			'joinTable' => 'persons_media',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'media_id',
			'unique' => true
		)
	);
}
?>