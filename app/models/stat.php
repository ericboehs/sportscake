<?php
class Stat extends AppModel {

	var $name = 'Stat';
	var $validate = array(
		'stat_repository_id' => array('numeric'),
		'context' => array('notempty')
	);
/*
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'StatRepository' => array(
			'className' => 'StatRepository',
			'foreignKey' => 'stat_repository_id',
		),
		'StatHolder' => array(
			'className' => 'StatHolder',
			'foreignKey' => 'stat_holder_id',
		),
		'StatCoverage' => array(
			'className' => 'StatCoverage',
			'foreignKey' => 'stat_coverage_id',
		),
		'StatMembership' => array(
			'className' => 'StatMembership',
			'foreignKey' => 'stat_membership_id',
		)
	);

	var $hasAndBelongsToMany = array(
		'AmericanFootballDefensive' => array(
			'className' => 'AmericanFootballDefensive',
			'joinTable' => 'american_football_defensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_defensive_id',
			'unique' => true
		),
		'AmericanFootballDownProgress' => array(
			'className' => 'AmericanFootballDownProgress',
			'joinTable' => 'american_football_down_progress_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_down_progress_id',
			'unique' => true
		),
		'AmericanFootballFumble' => array(
			'className' => 'AmericanFootballFumble',
			'joinTable' => 'american_football_fumbles_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_fumble_id',
			'unique' => true
		),
		'AmericanFootballOffensive' => array(
			'className' => 'AmericanFootballOffensive',
			'joinTable' => 'american_football_offensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_offensive_id',
			'unique' => true
		),
		'AmericanFootballPassing' => array(
			'className' => 'AmericanFootballPassing',
			'joinTable' => 'american_football_passing_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_passing_id',
			'unique' => true
		),
		'AmericanFootballPenalty' => array(
			'className' => 'AmericanFootballPenalty',
			'joinTable' => 'american_football_penalties_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_penalty_id',
			'unique' => true
		),
		'AmericanFootballRushing' => array(
			'className' => 'AmericanFootballRushing',
			'joinTable' => 'american_football_rushing_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_rushing_id',
			'unique' => true
		),
		'AmericanFootballSacksAgainst' => array(
			'className' => 'AmericanFootballSacksAgainst',
			'joinTable' => 'american_football_sacks_against_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_sacks_against_id',
			'unique' => true
		),
		'AmericanFootballScoring' => array(
			'className' => 'AmericanFootballScoring',
			'joinTable' => 'american_football_scoring_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_scoring_id',
			'unique' => true
		),
		'AmericanFootballSpecialTeam' => array(
			'className' => 'AmericanFootballSpecialTeam',
			'joinTable' => 'american_football_special_teams_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_special_team_id',
			'unique' => true
		),
		'AmericanFootballTeam' => array(
			'className' => 'AmericanFootballTeam',
			'joinTable' => 'american_football_team_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'american_football_team_id',
			'unique' => true
		),
		'BaseballDefensive' => array(
			'className' => 'BaseballDefensive',
			'joinTable' => 'baseball_defensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'baseball_defensive_id',
			'unique' => true
		),
		'BaseballOffensive' => array(
			'className' => 'BaseballOffensive',
			'joinTable' => 'baseball_offensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'baseball_offensive_id',
			'unique' => true
		),
		'BaseballPitching' => array(
			'className' => 'BaseballPitching',
			'joinTable' => 'baseball_pitching_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'baseball_pitching_id',
			'unique' => true
		),
		'BasketballDefensive' => array(
			'className' => 'BasketballDefensive',
			'joinTable' => 'basketball_defensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'basketball_defensive_id',
			'unique' => true
		),
		'BasketballOffensive' => array(
			'className' => 'BasketballOffensive',
			'joinTable' => 'basketball_offensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'basketball_offensive_id',
			'unique' => true
		),
		'BasketballRebounding' => array(
			'className' => 'BasketballRebounding',
			'joinTable' => 'basketball_rebounding_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'basketball_rebounding_id',
			'unique' => true
		),
		'BasketballTeam' => array(
			'className' => 'BasketballTeam',
			'joinTable' => 'basketball_team_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'basketball_team_id',
			'unique' => true
		),
		'Core' => array(
			'className' => 'Core',
			'joinTable' => 'core_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'core_id',
			'unique' => true
		),
		'IceHockeyDefensive' => array(
			'className' => 'IceHockeyDefensive',
			'joinTable' => 'ice_hockey_defensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'ice_hockey_defensive_id',
			'unique' => true
		),
		'IceHockeyOffensive' => array(
			'className' => 'IceHockeyOffensive',
			'joinTable' => 'ice_hockey_offensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'ice_hockey_offensive_id',
			'unique' => true
		),
		'IceHockeyPlayer' => array(
			'className' => 'IceHockeyPlayer',
			'joinTable' => 'ice_hockey_player_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'ice_hockey_player_id',
			'unique' => true
		),
		'MotorRacingQualifying' => array(
			'className' => 'MotorRacingQualifying',
			'joinTable' => 'motor_racing_qualifying_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'motor_racing_qualifying_id',
			'unique' => true
		),
		'MotorRacingRace' => array(
			'className' => 'MotorRacingRace',
			'joinTable' => 'motor_racing_race_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'motor_racing_race_id',
			'unique' => true
		),
		'Penalty' => array(
			'className' => 'Penalty',
			'joinTable' => 'penalty_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'penalty_id',
			'unique' => true
		),
		'SoccerDefensive' => array(
			'className' => 'SoccerDefensive',
			'joinTable' => 'soccer_defensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'soccer_defensive_id',
			'unique' => true
		),
		'SoccerFoul' => array(
			'className' => 'SoccerFoul',
			'joinTable' => 'soccer_foul_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'soccer_foul_id',
			'unique' => true
		),
		'SoccerOffensive' => array(
			'className' => 'SoccerOffensive',
			'joinTable' => 'soccer_offensive_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'soccer_offensive_id',
			'unique' => true
		),
		'TennisPlayer' => array(
			'className' => 'TennisPlayer',
			'joinTable' => 'tennis_player_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'tennis_player_id',
			'unique' => true
		),
		'TennisReturn' => array(
			'className' => 'TennisReturn',
			'joinTable' => 'tennis_return_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'tennis_return_id',
			'unique' => true
		),
		'TennisService' => array(
			'className' => 'TennisService',
			'joinTable' => 'tennis_service_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'tennis_service_id',
			'unique' => true
		),
		'TennisSet' => array(
			'className' => 'TennisSet',
			'joinTable' => 'tennis_set_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'tennis_set_id',
			'unique' => true
		),
		'TennisTeam' => array(
			'className' => 'TennisTeam',
			'joinTable' => 'tennis_team_stats',
			'foreignKey' => 'stat_id',
			'associationForeignKey' => 'tennis_team_id',
			'unique' => true
		)
	);
*/
}
?>