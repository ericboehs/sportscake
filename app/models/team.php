<?php
class Team extends AppModel {

	var $name = 'Team';
	var $validate = array(
		'team_key' => array('notempty'),
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'HomeSite' => array(
			'className' => 'Site',
			'foreignKey' => 'home_site_id',
		)
	);

	var $hasMany = array(
		'AmericanFootballEventState' => array(
			'className' => 'AmericanFootballEventState',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'IceHockeyActionPlay' => array(
			'className' => 'IceHockeyActionPlay',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'TeamPhase' => array(
			'className' => 'TeamPhase',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'WageringMoneyline' => array(
			'className' => 'WageringMoneyline',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'WageringOddsLine' => array(
			'className' => 'WageringOddsLine',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'WageringRunline' => array(
			'className' => 'WageringRunline',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'WageringStraightSpreadLine' => array(
			'className' => 'WageringStraightSpreadLine',
			'foreignKey' => 'team_id',
			'dependent' => false
		),
		'WageringTotalScoreLine' => array(
			'className' => 'WageringTotalScoreLine',
			'foreignKey' => 'team_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'AnFootballSpecialTeamsStat' => array(
			'className' => 'AnFootballSpecialTeamsStat',
			'joinTable' => 'american_football_special_teams_stats',
			'foreignKey' => 'team_id',
			'associationForeignKey' => 'an_football_special_teams_stat_id',
			'unique' => true
		),
		'AmericanFootballSpecial' => array(
			'className' => 'AmericanFootballSpecial',
			'joinTable' => 'american_football_special_teams_stats',
			'foreignKey' => 'team_id',
			'associationForeignKey' => 'american_football_special_id',
			'unique' => true
		),
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'teams_documents',
			'foreignKey' => 'team_id',
			'associationForeignKey' => 'document_id',
			'unique' => true
		),
		'Media' => array(
			'className' => 'Media',
			'joinTable' => 'teams_media',
			'foreignKey' => 'team_id',
			'associationForeignKey' => 'media_id',
			'unique' => true
		)
	);
}
?>