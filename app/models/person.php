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
			'className' => 'BaseballEventState',
			'foreignKey' => 'batter_id',
			'dependent' => false
		),
		'BaseballEventState.Pitcher' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'pitcher_id',
			'dependent' => false
		),
		'EventActionParticipant' => array(
			'className' => 'EventActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
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
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'PersonOriginal' => array(
			'className' => 'SoccerActionSubstitution',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'PersonPhase' => array(
			'className' => 'PersonPhase',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'PersonReplacing' => array(
			'className' => 'Person', //FIXME: This looks wrong.  Person has many PersonReplacing in the Person class?
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'ReceiverPerson' => array(
			'className' => 'SoccerActionParticipant',
			'foreignKey' => 'receiver_person_id',
		),
		'RunnerOnFirst' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'RunnerOnSecond' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'RunnerOnThird' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'dependent' => false,
		),
		'SoccerActionParticipant' => array(
			'className' => 'SoccerActionParticipant',
			'foreignKey' => 'person_id',
			'dependent' => false
		),
		'ServerPerson' => array(
			'className' => 'TennisEventState',
			'foreignKey' => 'server_person_id',
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