<?php
class Event extends AppModel {

	var $name = 'Event';
	var $validate = array(
		'event_key' => array('notempty'),
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'site_id',
		)
	);

	var $hasMany = array(
		'AmericanFootballEventState' => array(
			'className' => 'AmericanFootballEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'BaseballEventState' => array(
			'className' => 'BaseballEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'BasketballEventState' => array(
			'className' => 'BasketballEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'EventState' => array(
			'className' => 'EventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'IceHockeyEventState' => array(
			'className' => 'IceHockeyEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'MotorRacingEventState' => array(
			'className' => 'MotorRacingEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'SoccerEventState' => array(
			'className' => 'SoccerEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'TennisEventState' => array(
			'className' => 'TennisEventState',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WageringMoneyline' => array(
			'className' => 'WageringMoneyline',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WageringOddsLine' => array(
			'className' => 'WageringOddsLine',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WageringRunline' => array(
			'className' => 'WageringRunline',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WageringStraightSpreadLine' => array(
			'className' => 'WageringStraightSpreadLine',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WageringTotalScoreLine' => array(
			'className' => 'WageringTotalScoreLine',
			'foreignKey' => 'event_id',
			'dependent' => false
		),
		'WeatherCondition' => array(
			'className' => 'WeatherCondition',
			'foreignKey' => 'event_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'joinTable' => 'affiliations_events',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'affiliation_id',
			'unique' => true
		),
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'joinTable' => 'document_fixtures_events',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'document_fixture_id',
			'unique' => true
		),
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'events_documents',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'document_id',
			'unique' => true
		),
		'Media' => array(
			'className' => 'Media',
			'joinTable' => 'events_media',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'media_id',
			'unique' => true
		),
		'SubSeason' => array(
			'className' => 'SubSeason',
			'joinTable' => 'events_sub_seasons',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'sub_season_id',
			'unique' => true
		),
		'Participant' => array( //FIXME: Not sure on this one
			'className' => 'ParticipantEvents',
			'joinTable' => 'participants_events',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'participant_id',
			'unique' => true
		)
	);
}
?>