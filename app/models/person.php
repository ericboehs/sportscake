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
		'BaseballActionSubstitutionPersonOriginal' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_original_id',
			'dependent' => false
		),
		'BaseballActionSubstitutionPersonReplacing' => array(
			'className' => 'BaseballActionSubstitution',
			'foreignKey' => 'person_replacing_id',
			'dependent' => false
		),
		'BaseballDefensivePlayerPlayer' => array(
			'className' => 'BaseballDefensivePlayer',
			'foreignKey' => 'player_id',
			'dependent' => false
		),
		'BaseballEventStateBatter' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'batter_id',
			'dependent' => false
		),
		'BaseballEventStatePitcher' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'pitcher_id',
			'dependent' => false
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'EventActionSubstitutionPersonOriginal' => array(
			'className' => 'EventActionSubstitution',
			'foreignKey' => 'person_original_id',
		),
		'EventActionSubstitutionPersonReplacing' => array(
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
		'SoccerActionFoulFouler' => array(
			'className' => 'SoccerActionFoul',
			'foreignKey' => 'fouler_id',
			'dependent' => false,
		),
		'SoccerActionFoulRecipient' => array(
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
		'SoccerActionSubstitutionOriginal' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_original_id',
			'dependent' => false
		),
		'SoccerActionSubstitutionReplacing' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_replacing_id',
			'dependent' => false
		),
		'TennisEventStateServerPerson' => array(
			'className' => 'TennisEventState',
			'foreignKey' => 'server_person_id',
		),
		'TennisEventStateReceiverPerson' => array(
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