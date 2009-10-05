<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2009-10-05 16:10:25 : 1254759745*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $addresses = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'language' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'suite' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'floor' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'building' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'street_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'street_prefix' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'street' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'street_suffix' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'neighborhood' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'district' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'locality' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'county' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'region' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'postal_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_addresses_1' => array('column' => 'locality', 'unique' => 0), 'IDX_addresses_2' => array('column' => 'region', 'unique' => 0), 'IDX_addresses_3' => array('column' => 'postal_code', 'unique' => 0), 'IDX_FK_add_loc_id__loc_id' => array('column' => 'location_id', 'unique' => 0))
	);
	var $affiliation_phases = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'ancestor_affiliation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'start_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'end_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_seasons_affiliation_phases1' => array('column' => 'end_season_id', 'unique' => 0), 'FK_seasons_affiliation_phases' => array('column' => 'start_season_id', 'unique' => 0), 'FK_affiliations_affiliation_phases1' => array('column' => 'ancestor_affiliation_id', 'unique' => 0), 'FK_affiliations_affiliation_phases' => array('column' => 'affiliation_id', 'unique' => 0))
	);
	var $affiliations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'affiliation_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'affiliation_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_affiliations_1' => array('column' => 'affiliation_key', 'unique' => 0), 'IDX_affiliations_2' => array('column' => 'affiliation_type', 'unique' => 0), 'IDX_FK_aff_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0))
	);
	var $affiliations_documents = array(
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_doc_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_aff_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $affiliations_events = array(
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_eve_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_aff_eve_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $affiliations_media = array(
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_aff_med_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0))
	);
	var $american_football_action_participants = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'american_football_action_play_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'participant_role' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'score_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'field_line' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'yardage' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'score_credit' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'yards_gained' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_american_football_action_participants_1' => array('column' => 'participant_role', 'unique' => 0), 'IDX_american_football_action_participants_2' => array('column' => 'score_type', 'unique' => 0), 'IDX_FK_ame_foo_act_par_ame_foo_act_pla_id__ame_foo_act_pla_id' => array('column' => 'american_football_action_play_id', 'unique' => 0), 'IDX_FK_ame_foo_act_par_per_id__per_id' => array('column' => 'person_id', 'unique' => 0))
	);
	var $american_football_action_plays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'american_football_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'play_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'score_attempt_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'drive_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'points' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_american_football_action_plays_1' => array('column' => 'play_type', 'unique' => 0), 'IDX_american_football_action_plays_2' => array('column' => 'score_attempt_type', 'unique' => 0), 'IDX_american_football_action_plays_3' => array('column' => 'drive_result', 'unique' => 0), 'IDX_FK_ame_foo_act_pla_ame_foo_eve_sta_id__ame_foo_eve_sta_id' => array('column' => 'american_football_event_state_id', 'unique' => 0))
	);
	var $american_football_defensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tackles_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'tackles_solo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'tackles_assists' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'interceptions_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'interceptions_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'interceptions_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'interceptions_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'interceptions_touchdown' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'quarterback_hurries' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sacks_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sacks_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_defensed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_down_progress_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first_downs_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'first_downs_pass' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'first_downs_run' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'first_downs_penalty' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_third_down' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_third_down_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_third_down_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_fourth_down' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_fourth_down_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'conversions_fourth_down_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 6, 'key' => 'index'),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'period_time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'clock_state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'down' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'team_in_possession_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'distance_for_1st_down' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'field_side' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_line' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_ame_foo_eve_sta_tea_in_pos_id__tea_id' => array('column' => 'team_in_possession_id', 'unique' => 0), 'IDX_american_football_event_states_1' => array('column' => 'current_state', 'unique' => 0), 'IDX_american_football_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_american_football_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0), 'IDX_FK_ame_foo_eve_sta_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $american_football_fumbles_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fumbles_committed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_forced' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_recovered' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_lost' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_yards_gained' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_own_committed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_own_recovered' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_own_lost' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_own_yards_gained' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_opposing_committed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_opposing_recovered' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_opposing_lost' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fumbles_opposing_yards_gained' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_offensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'offensive_plays_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'offensive_plays_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'offensive_plays_average_yards_per' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'possession_duration' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'turnovers_giveaway' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_passing_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'passes_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_completions' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_yards_gross' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_yards_net' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_yards_lost' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_touchdowns' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_touchdowns_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_interceptions' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_interceptions_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passes_average_yards_per' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'passer_rating' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_touchdowns' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_first_down' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receptions_average_yards_per' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_penalties_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'penalties_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_first_downs' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_rushing_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'rushes_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rushes_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rushes_touchdowns' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rushing_average_yards_per' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rushes_first_down' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rushes_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_sacks_against_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sacks_against_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sacks_against_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_scoring_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'touchdowns_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchdowns_passing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchdowns_rushing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchdowns_special_teams' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchdowns_defensive' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'extra_points_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'extra_points_made' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'extra_points_missed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'extra_points_blocked' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goal_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_made' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_missed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_blocked' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'safeties_against' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'two_point_conversions_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'two_point_conversions_made' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_special_teams_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'returns_punt_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_punt_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_punt_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_punt_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_punt_touchdown' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_kickoff_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_kickoff_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_kickoff_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_kickoff_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_kickoff_touchdown' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'returns_yards' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_yards_gross' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_yards_net' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_longest' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_inside_20' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_inside_20_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'punts_blocked' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_total_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_kickoffs' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_kickoffs_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_punts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_punts_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_interceptions' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'touchbacks_interceptions_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fair_catches' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $american_football_team_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'yards_per_attempt' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'average_starting_position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'timeouts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'time_of_possession' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'turnover_ratio' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $awards = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'participant_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'participant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'award_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'total' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'award_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'currency' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $baseball_action_contact_details = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'baseball_action_pitch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'strength' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'velocity' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'trajectory_coordinates' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'trajectory_formula' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_bas_act_con_det_bas_act_pit_id__bas_act_pit_id' => array('column' => 'baseball_action_pitch_id', 'unique' => 0))
	);
	var $baseball_action_pitches = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'baseball_action_play_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'baseball_defensive_group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'umpire_call' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'pitch_location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'pitch_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'pitch_velocity' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'trajectory_coordinates' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'trajectory_formula' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ball_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'strike_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_baseball_action_plays_baseball_action_pitches' => array('column' => 'baseball_action_play_id', 'unique' => 0), 'IDX_baseball_action_pitches_1' => array('column' => 'umpire_call', 'unique' => 0), 'IDX_baseball_action_pitches_2' => array('column' => 'pitch_type', 'unique' => 0), 'IDX_FK_bas_act_pit_bas_def_gro_id__bas_def_gro_id' => array('column' => 'baseball_defensive_group_id', 'unique' => 0))
	);
	var $baseball_action_plays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'baseball_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'play_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'out_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'notation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'notation_yaml' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'baseball_defensive_group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'runner_on_first_advance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'runner_on_second_advance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'runner_on_third_advance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'outs_recorded' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rbi' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'runs_scored' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'earned_runs_scored' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_baseball_action_plays_1' => array('column' => 'play_type', 'unique' => 0), 'IDX_baseball_action_plays_2' => array('column' => 'out_type', 'unique' => 0), 'IDX_FK_bas_act_pla_bas_eve_sta_id__bas_eve_sta_id' => array('column' => 'baseball_event_state_id', 'unique' => 0))
	);
	var $baseball_action_substitutions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'baseball_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'person_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'person_original_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'person_original_position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'person_original_lineup_slot' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'person_replacing_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'person_replacing_position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'person_replacing_lineup_slot' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'substitution_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_bas_act_sub_per_rep_pos_id__pos_id' => array('column' => 'person_replacing_position_id', 'unique' => 0), 'FK_bas_act_sub_per_ori_pos_id__pos_id' => array('column' => 'person_original_position_id', 'unique' => 0), 'FK_bas_act_sub_bas_eve_sta_id__bas_eve_sta_id' => array('column' => 'baseball_event_state_id', 'unique' => 0), 'FK_bas_act_sub_per_rep_id__per_id' => array('column' => 'person_replacing_id', 'unique' => 0), 'FK_bas_act_sub_per_ori_id__per_id' => array('column' => 'person_original_id', 'unique' => 0))
	);
	var $baseball_defensive_group = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $baseball_defensive_players = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'baseball_defensive_group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'player_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_bas_def_pla_bas_def_gro_id__bas_def_gro_id' => array('column' => 'baseball_defensive_group_id', 'unique' => 0), 'FK_bas_def_pla_pla_id__per_id' => array('column' => 'player_id', 'unique' => 0), 'FK_bas_def_pla_pos_id__pos_id' => array('column' => 'position_id', 'unique' => 0))
	);
	var $baseball_defensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'double_plays' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'triple_plays' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'putouts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'assists' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'fielding_percentage' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'defensive_average' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'errors_passed_ball' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'errors_catchers_interference' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $baseball_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 6, 'key' => 'index'),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'at_bat_number' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'inning_value' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'inning_half' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'outs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'balls' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'strikes' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'runner_on_first_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'runner_on_second_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'runner_on_third_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'runner_on_first' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 6),
		'runner_on_second' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 6),
		'runner_on_third' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 6),
		'runs_this_inning_half' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'pitcher_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'batter_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'batter_side' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_bas_eve_sta_run_on_sec_id__per_id' => array('column' => 'runner_on_second_id', 'unique' => 0), 'FK_bas_eve_sta_run_on_thi_id__per_id' => array('column' => 'runner_on_third_id', 'unique' => 0), 'FK_bas_eve_sta_run_on_fir_id__per_id' => array('column' => 'runner_on_first_id', 'unique' => 0), 'FK_bas_eve_sta_bat_id__per_id' => array('column' => 'batter_id', 'unique' => 0), 'FK_bas_eve_sta_pit_id__per_id' => array('column' => 'pitcher_id', 'unique' => 0), 'IDX_baseball_event_states_1' => array('column' => 'current_state', 'unique' => 0), 'IDX_baseball_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_baseball_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0), 'IDX_FK_bas_eve_sta_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $baseball_offensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'average' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'runs_scored' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'at_bats' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'hits' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rbi' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'total_bases' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'slugging_percentage' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'bases_on_balls' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'strikeouts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'left_on_base' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'left_in_scoring_position' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'singles' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'doubles' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'triples' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'home_runs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'grand_slams' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'at_bats_per_rbi' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'plate_appearances_per_rbi' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'at_bats_per_home_run' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'plate_appearances_per_home_run' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'sac_flies' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sac_bunts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'grounded_into_double_play' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'moved_up' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'on_base_percentage' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'stolen_bases' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stolen_bases_caught' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stolen_bases_average' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'hit_by_pitch' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'defensive_interferance_reaches' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'on_base_plus_slugging' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'plate_appearances' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'hits_extra_base' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $baseball_pitching_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'runs_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'singles_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'doubles_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'triples_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'home_runs_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'innings_pitched' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'hits' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'earned_runs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unearned_runs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bases_on_balls' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bases_on_balls_intentional' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'strikeouts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'strikeout_to_bb_ratio' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'number_of_pitches' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'era' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'inherited_runners_scored' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'pick_offs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'errors_hit_with_pitch' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'errors_wild_pitch' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'balks' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'wins' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'losses' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'saves' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'shutouts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'games_complete' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'games_finished' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winning_percentage' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'event_credit' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'save_credit' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $basketball_defensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'steals_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'steals_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'blocks_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'blocks_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $basketball_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_basketball_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_basketball_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0), 'IDX_FK_events_basketball_event_states' => array('column' => 'event_id', 'unique' => 0))
	);
	var $basketball_offensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'field_goals_made' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'field_goals_attempted' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'field_goals_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_attempted_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'field_goals_percentage_adjusted' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'three_pointers_made' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'three_pointers_attempted' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'three_pointers_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'three_pointers_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'three_pointers_attempted_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'free_throws_made' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'free_throws_attempted' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'free_throws_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'free_throws_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'free_throws_attempted_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'turnovers_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'turnovers_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_off_turnovers' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_in_paint' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_on_second_chance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_on_fast_break' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $basketball_rebounding_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'rebounds_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rebounds_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rebounds_defensive' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rebounds_offensive' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'team_rebounds_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'team_rebounds_per_game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'team_rebounds_defensive' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'team_rebounds_offensive' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $basketball_team_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'timeouts_left' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'largest_lead' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fouls_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'turnover_margin' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $bookmakers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_boo_loc_id__loc_id' => array('column' => 'location_id', 'unique' => 0), 'FK_boo_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0))
	);
	var $core_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'score' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_opposing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempts_opposing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_percentage_opposing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'time_played_event' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'time_played_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'time_played_event_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'events_played' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'events_started' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $db_info = array(
		'version' => array('type' => 'string', 'null' => false, 'default' => '16', 'length' => 100, 'key' => 'primary'),
		'indexes' => array('IDX_db_info_1' => array('column' => 'version', 'unique' => 0))
	);
	var $display_names = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'language' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'entity_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'entity_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'full_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'middle_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'abbreviation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prefix' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'suffix' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_display_names_1' => array('column' => 'entity_id', 'unique' => 0), 'IDX_display_names_2' => array('column' => 'entity_type', 'unique' => 0))
	);
	var $document_classes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_document_classes_1' => array('column' => 'name', 'unique' => 0))
	);
	var $document_contents = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sportsml' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'sportsml_blob' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'abstract' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_doc_con_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $document_fixtures = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fixture_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'document_class_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_document_fixtures_1' => array('column' => 'fixture_key', 'unique' => 0), 'IDX_FK_doc_fix_doc_cla_id__doc_cla_id' => array('column' => 'document_class_id', 'unique' => 0), 'IDX_FK_doc_fix_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0))
	);
	var $document_fixtures_events = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_fixture_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'latest_document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'last_update' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_doc_fix_eve_doc_fix_id__doc_fix_id' => array('column' => 'document_fixture_id', 'unique' => 0), 'IDX_FK_doc_fix_eve_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'IDX_FK_doc_fix_eve_lat_doc_id__doc_id' => array('column' => 'latest_document_id', 'unique' => 0))
	);
	var $document_package_entry = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_package_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'rank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'headline' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'short_headline' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_doc_pac_ent_doc_pac_id__doc_pac_id' => array('column' => 'document_package_id', 'unique' => 0), 'FK_doc_pac_ent_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $document_packages = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'package_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'package_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_time' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $documents = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'doc_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'language' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'priority' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'revision_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'stats_coverage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'document_fixture_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'source_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'db_loading_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_documents_1' => array('column' => 'doc_id', 'unique' => 0), 'IDX_documents_3' => array('column' => 'date_time', 'unique' => 0), 'IDX_documents_4' => array('column' => 'priority', 'unique' => 0), 'IDX_documents_5' => array('column' => 'revision_id', 'unique' => 0), 'IDX_FK_doc_doc_fix_id__doc_fix_id' => array('column' => 'document_fixture_id', 'unique' => 0), 'IDX_FK_doc_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_FK_doc_sou_id__pub_id' => array('column' => 'source_id', 'unique' => 0))
	);
	var $documents_media = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_caption_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_doc_med_med_cap_id__med_cap_id' => array('column' => 'media_caption_id', 'unique' => 0), 'FK_doc_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_doc_med_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $event_action_fouls = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foul_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'foul_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'foul_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fouler_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_event_states_event_action_fouls' => array('column' => 'event_state_id', 'unique' => 0))
	);
	var $event_action_participants = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_action_play_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'participant_role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_event_action_plays_event_action_participants' => array('column' => 'event_action_play_id', 'unique' => 0), 'FK_persons_event_action_participants' => array('column' => 'person_id', 'unique' => 0), 'FK_event_states_event_action_participants' => array('column' => 'event_state_id', 'unique' => 0))
	);
	var $event_action_penalties = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'penalty_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_level' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caution_level' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_event_states_event_action_penalties' => array('column' => 'event_state_id', 'unique' => 0))
	);
	var $event_action_plays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'play_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempt_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'play_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_event_states_event_action_plays' => array('column' => 'event_state_id', 'unique' => 0))
	);
	var $event_action_substitutions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_original_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_original_position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_replacing_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_replacing_position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'substitution_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_persons_event_action_substitutions1' => array('column' => 'person_replacing_id', 'unique' => 0), 'FK_persons_event_action_substitutions' => array('column' => 'person_original_id', 'unique' => 0), 'FK_event_states_event_action_substitutions' => array('column' => 'event_state_id', 'unique' => 0), 'FK_positions_event_action_substitutions1' => array('column' => 'person_replacing_position_id', 'unique' => 0), 'FK_positions_event_action_substitutions' => array('column' => 'person_original_position_id', 'unique' => 0))
	);
	var $event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'minutes_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_minutes_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_events_event_states' => array('column' => 'event_id', 'unique' => 0), 'IDX_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0))
	);
	var $events = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'site_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'site_alignment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'event_status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'duration' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'attendance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'last_update' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'event_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'round_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'time_certainty' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_events_1' => array('column' => 'event_key', 'unique' => 0), 'IDX_FK_eve_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_FK_eve_sit_id__sit_id' => array('column' => 'site_id', 'unique' => 0))
	);
	var $events_documents = array(
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_eve_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0), 'FK_eve_doc_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $events_media = array(
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_eve_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_eve_med_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $events_sub_seasons = array(
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sub_season_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_eve_sub_sea_sub_sea_id__sub_sea_id' => array('column' => 'sub_season_id', 'unique' => 0), 'FK_eve_sub_sea_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $ice_hockey_action_participants = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ice_hockey_action_play_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'participant_role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'point_credit' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'goals_to_date' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'assists_to_date' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_to_date' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_ice_hockey_action_plays_ice_hockey_action_participants' => array('column' => 'ice_hockey_action_play_id', 'unique' => 0), 'FK_persons_ice_hockey_action_participants' => array('column' => 'person_id', 'unique' => 0))
	);
	var $ice_hockey_action_plays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ice_hockey_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'play_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempt_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'play_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_length' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'team_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'strength' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'location_x' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'location_y' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'location_zone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shootout_shot_order' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'goal_order' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'shot_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shot_distance' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goal_zone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'empty_net' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goal_awarded' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_ice_hockey_event_states_ice_hockey_action_plays' => array('column' => 'ice_hockey_event_state_id', 'unique' => 0))
	);
	var $ice_hockey_defensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'shots_power_play_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_power_play_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_penalty_shot_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_against_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'saves' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'save_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_killing_amount' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_killing_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_blocked' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'takeaways' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shutouts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'minutes_penalty_killing' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'hits' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_empty_net_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_short_handed_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_shootout_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_shootout_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goaltender_wins' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'goaltender_losses' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'goaltender_ties' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'goals_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'shots_allowed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $ice_hockey_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'action_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_ice_hoc_eve_sta_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'IDX_ice_hockey_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_ice_hockey_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0))
	);
	var $ice_hockey_offensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'goals_game_winning' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_game_tying' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_power_play' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_short_handed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_even_strength' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_empty_net' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_overtime' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_shootout' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_penalty_shot' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'power_play_amount' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'power_play_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_taken' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_missed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'giveaways' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'minutes_power_play' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'faceoff_wins' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'faceoff_losses' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'faceoff_win_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'scoring_chances' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $ice_hockey_player_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'plus_minus' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $injury_phases = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'injury_status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'injury_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'injury_comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'disabled_list' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'end_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'phase_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'injury_side' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_inj_pha_per_id__per_id' => array('column' => 'person_id', 'unique' => 0), 'IDX_FK_inj_pha_sea_id__sea_id' => array('column' => 'season_id', 'unique' => 0), 'IDX_injury_phases_2' => array('column' => 'injury_status', 'unique' => 0), 'IDX_injury_phases_3' => array('column' => 'start_date_time', 'unique' => 0), 'IDX_injury_phases_4' => array('column' => 'end_date_time', 'unique' => 0))
	);
	var $key_aliases = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'key_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'key_root_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_key_roots_key_aliases' => array('column' => 'key_root_id', 'unique' => 0), 'IDX_key_aliases_2' => array('column' => 'key_id', 'unique' => 0))
	);
	var $key_roots = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'key_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_key_aliases_1' => array('column' => 'key_type', 'unique' => 0))
	);
	var $latest_revisions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'revision_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75, 'key' => 'index'),
		'latest_document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_lat_rev_lat_doc_id__doc_id' => array('column' => 'latest_document_id', 'unique' => 0), 'IDX_latest_revisions_1' => array('column' => 'revision_id', 'unique' => 0))
	);
	var $locations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'timezone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'latitude' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'longitude' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'country_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_locations_1' => array('column' => 'country_code', 'unique' => 0))
	);
	var $media = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'object_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'source_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'revision_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'media_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'credit_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'db_loading_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'creation_location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_med_cre_id__per_id' => array('column' => 'credit_id', 'unique' => 0), 'FK_med_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'FK_med_cre_loc_id__loc_id' => array('column' => 'creation_location_id', 'unique' => 0))
	);
	var $media_captions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'caption_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caption' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caption_author_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'language' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caption_size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_med_cap_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_med_cap_cap_aut_id__per_id' => array('column' => 'caption_author_id', 'unique' => 0))
	);
	var $media_contents = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'object' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'format' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'mime_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'height' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'width' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'duration' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'file_size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'resolution' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_med_con_med_id__med_id' => array('column' => 'media_id', 'unique' => 0))
	);
	var $media_keywords = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'keyword' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_med_key_med_id__med_id' => array('column' => 'media_id', 'unique' => 0))
	);
	var $motor_racing_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'lap' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'laps_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'flag_state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_events_motor_racing_event_states' => array('column' => 'event_id', 'unique' => 0), 'IDX_motor_racing_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_motor_racing_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0))
	);
	var $motor_racing_qualifying_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'grid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'pole_position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'pole_wins' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'qualifying_speed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'qualifying_speed_units' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'qualifying_time' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'qualifying_position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $motor_racing_race_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'time_behind_leader' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'laps_behind_leader' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'time_ahead_follower' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'laps_ahead_follower' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'time' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_rookie' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'bonus' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'laps_completed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'laps_leading_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'distance_leading' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'distance_completed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'distance_units' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'speed_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'speed_units' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'finishes_top_5' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'finishes_top_10' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'starts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'finishes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'non_finishes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'wins' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'races_leading' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'money' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'money_units' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'leads_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $outcome_totals = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'standing_subgroup_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'outcome_holder_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'outcome_holder_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'wins' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'losses' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ties' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'undecideds' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'winning_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_for' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_scored_against' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points_difference' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'standing_points' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'streak_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'streak_duration' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'streak_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'streak_start' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'streak_end' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'events_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'games_back' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'result_effect' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sets_against' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sets_for' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_out_tot_sta_sub_id__sta_sub_id' => array('column' => 'standing_subgroup_id', 'unique' => 0))
	);
	var $participants_events = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'participant_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'participant_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'alignment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'score' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'event_outcome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'rank' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'result_effect' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_par_eve_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'IDX_participants_events_1' => array('column' => 'participant_type', 'unique' => 0), 'IDX_participants_events_2' => array('column' => 'participant_id', 'unique' => 0), 'IDX_participants_events_3' => array('column' => 'alignment', 'unique' => 0), 'IDX_participants_events_4' => array('column' => 'event_outcome', 'unique' => 0))
	);
	var $penalty_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'count' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $periods = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'participant_event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'label' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempts' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_per_par_eve_id__par_eve_id' => array('column' => 'participant_event_id', 'unique' => 0))
	);
	var $person_event_metadata = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'health' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'weight' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'team_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'lineup_slot' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'lineup_slot_sequence' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_per_eve_met_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'IDX_FK_per_eve_met_per_id__per_id' => array('column' => 'person_id', 'unique' => 0), 'IDX_FK_per_eve_met_pos_id__pos_id' => array('column' => 'position_id', 'unique' => 0), 'IDX_FK_per_eve_met_rol_id__rol_id' => array('column' => 'role_id', 'unique' => 0), 'IDX_FK_teams_person_event_metadata' => array('column' => 'team_id', 'unique' => 0), 'IDX_person_event_metadata_1' => array('column' => 'status', 'unique' => 0))
	);
	var $person_phases = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'membership_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'membership_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'role_status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'phase_status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'uniform_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'regular_position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'regular_position_depth' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'height' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'weight' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'start_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'end_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'entry_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'exit_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'selection_level' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'selection_sublevel' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'selection_overall' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'duration' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_per_pha_rol_id__rol_id' => array('column' => 'role_id', 'unique' => 0), 'FK_per_pha_sta_sea_id__sea_id' => array('column' => 'start_season_id', 'unique' => 0), 'FK_per_pha_end_sea_id__sea_id' => array('column' => 'end_season_id', 'unique' => 0), 'IDX_FK_per_pha_per_id__per_id' => array('column' => 'person_id', 'unique' => 0), 'IDX_FK_per_pha_reg_pos_id__pos_id' => array('column' => 'regular_position_id', 'unique' => 0), 'IDX_person_phases_1' => array('column' => 'membership_type', 'unique' => 0), 'IDX_person_phases_2' => array('column' => 'membership_id', 'unique' => 0), 'IDX_person_phases_3' => array('column' => 'phase_status', 'unique' => 0))
	);
	var $persons = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'person_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'birth_date' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'death_date' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'birth_location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'hometown_location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'residence_location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'death_location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_per_bir_loc_id__loc_id' => array('column' => 'birth_location_id', 'unique' => 0), 'FK_per_dea_loc_id__loc_id' => array('column' => 'death_location_id', 'unique' => 0), 'FK_per_res_loc_id__loc_id' => array('column' => 'residence_location_id', 'unique' => 0), 'FK_per_hom_loc_id__loc_id' => array('column' => 'hometown_location_id', 'unique' => 0), 'IDX_FK_per_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_persons_1' => array('column' => 'person_key', 'unique' => 0))
	);
	var $persons_documents = array(
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_per_doc_per_id__per_id' => array('column' => 'person_id', 'unique' => 0), 'FK_per_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $persons_media = array(
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_per_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_per_med_per_id__per_id' => array('column' => 'person_id', 'unique' => 0))
	);
	var $positions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'abbreviation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_pos_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'IDX_positions_1' => array('column' => 'abbreviation', 'unique' => 0))
	);
	var $publishers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'publisher_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_publishers_1' => array('column' => 'publisher_key', 'unique' => 0))
	);
	var $rankings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_fixture_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'participant_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'participant_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'issuer' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ranking_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ranking_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ranking_value_previous' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'participant_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'participant_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'record_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'record_label' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'record_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'previous_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'date_coverage_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $roles = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'role_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'role_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_roles_1' => array('column' => 'role_key', 'unique' => 0))
	);
	var $seasons = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'season_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'league_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_sea_lea_id__aff_id' => array('column' => 'league_id', 'unique' => 0), 'IDX_FK_sea_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_seasons_1' => array('column' => 'season_key', 'unique' => 0))
	);
	var $sites = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'site_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'location_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_sit_loc_id__loc_id' => array('column' => 'location_id', 'unique' => 0), 'IDX_FK_sit_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_sites_1' => array('column' => 'site_key', 'unique' => 0))
	);
	var $soccer_action_fouls = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'soccer_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foul_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'foul_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'foul_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fouler_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_soccer_event_states_soccer_action_fouls' => array('column' => 'soccer_event_state_id', 'unique' => 0), 'FK_persons_soccer_action_fouls' => array('column' => 'recipient_id', 'unique' => 0))
	);
	var $soccer_action_participants = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'soccer_action_play_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'participant_role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_soccer_action_plays_soccer_action_participants' => array('column' => 'soccer_action_play_id', 'unique' => 0), 'FK_persons_soccer_action_participants' => array('column' => 'person_id', 'unique' => 0))
	);
	var $soccer_action_penalties = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'soccer_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'penalty_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'penalty_level' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caution_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'recipient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_soccer_event_states_soccer_action_penalties' => array('column' => 'soccer_event_state_id', 'unique' => 0), 'FK_persons_soccer_action_penalties' => array('column' => 'recipient_id', 'unique' => 0))
	);
	var $soccer_action_plays = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'soccer_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'play_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'score_attempt_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'play_result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_soccer_event_states_soccer_action_plays' => array('column' => 'soccer_event_state_id', 'unique' => 0))
	);
	var $soccer_action_substitutions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'soccer_event_state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'person_original_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_original_position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_replacing_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_replacing_position_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'substitution_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_soccer_event_states_soccer_action_substitutions' => array('column' => 'soccer_event_state_id', 'unique' => 0), 'FK_persons_soccer_action_substitutions' => array('column' => 'person_original_id', 'unique' => 0), 'FK_persons_soccer_action_substitutions1' => array('column' => 'person_replacing_id', 'unique' => 0), 'FK_positions_soccer_action_substitutions' => array('column' => 'person_original_position_id', 'unique' => 0), 'FK_positions_soccer_action_substitutions1' => array('column' => 'person_replacing_position_id', 'unique' => 0))
	);
	var $soccer_defensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'shots_penalty_shot_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_penalty_shot_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_against_average' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_against_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'saves' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'save_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'catches_punches' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_on_goal_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_shootout_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_shootout_allowed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_blocked' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shutouts' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $soccer_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_time_remaining' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'minutes_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'period_minute_elapsed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_events_soccer_event_states' => array('column' => 'event_id', 'unique' => 0), 'IDX_soccer_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_soccer_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0))
	);
	var $soccer_foul_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fouls_suffered' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'fouls_commited' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'cautions_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'cautions_pending' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caution_points_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'caution_points_pending' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ejections_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $soccer_offensive_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'goals_game_winning' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_game_tying' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_overtime' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_shootout' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'goals_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_game_winning' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_game_tying' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_overtime' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'assists_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_on_goal_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_hit_frame' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_taken' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_scored' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'shots_penalty_shot_missed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'shots_penalty_shot_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'shots_shootout_taken' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'shots_shootout_scored' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'shots_shootout_missed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'shots_shootout_percentage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'giveaways' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'offsides' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'corner_kicks' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'hat_tricks' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $standing_subgroups = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'standing_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'alignment_scope' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'competition_scope' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'competition_scope_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'duration_scope' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'scoping_label' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'site_scope' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_sta_sub_sta_id__sta_id' => array('column' => 'standing_id', 'unique' => 0), 'FK_sta_sub_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0))
	);
	var $standings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'standing_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sub_season_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'last_updated' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'source' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_sta_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_sta_sub_sea_id__sub_sea_id' => array('column' => 'sub_season_id', 'unique' => 0))
	);
	var $stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'stat_repository_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'stat_repository_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'stat_holder_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'stat_holder_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'stat_coverage_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'stat_coverage_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'stat_membership_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'stat_membership_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'context' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_stats_1' => array('column' => 'stat_repository_type', 'unique' => 0), 'IDX_stats_2' => array('column' => 'stat_repository_id', 'unique' => 0), 'IDX_stats_3' => array('column' => 'stat_holder_type', 'unique' => 0), 'IDX_stats_4' => array('column' => 'stat_holder_id', 'unique' => 0), 'IDX_stats_5' => array('column' => 'stat_coverage_type', 'unique' => 0), 'IDX_stats_6' => array('column' => 'stat_coverage_id', 'unique' => 0), 'IDX_stats_7' => array('column' => 'context', 'unique' => 0), 'IDX_stats_8' => array('column' => 'stat_coverage_type', 'unique' => 0), 'IDX_stats_9' => array('column' => 'stat_coverage_id', 'unique' => 0))
	);
	var $sub_seasons = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sub_season_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'season_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sub_season_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'start_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_sub_sea_sea_id__sea_id' => array('column' => 'season_id', 'unique' => 0), 'IDX_sub_seasons_1' => array('column' => 'sub_season_key', 'unique' => 0), 'IDX_sub_seasons_2' => array('column' => 'sub_season_type', 'unique' => 0))
	);
	var $team_phases = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'start_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'end_season_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'affiliation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'start_date_time' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'end_date_time' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'phase_status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_tea_aff_pha_rol_id__rol_id' => array('column' => 'role_id', 'unique' => 0), 'FK_tea_aff_pha_end_sea_id__sea_id' => array('column' => 'end_season_id', 'unique' => 0), 'FK_tea_aff_pha_sta_sea_id__sea_id' => array('column' => 'start_season_id', 'unique' => 0), 'FK_tea_aff_pha_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_tea_aff_pha_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0))
	);
	var $teams = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'team_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'home_site_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_tea_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'FK_tea_hom_sit_id__sit_id' => array('column' => 'home_site_id', 'unique' => 0), 'IDX_teams_team_key' => array('column' => 'team_key', 'unique' => 0))
	);
	var $teams_documents = array(
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_tea_doc_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_tea_doc_doc_id__doc_id' => array('column' => 'document_id', 'unique' => 0))
	);
	var $teams_media = array(
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_tea_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_tea_med_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0))
	);
	var $tennis_action_points = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sub_period_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sequence_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'win_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_action_volleys = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sequence_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'tennis_action_points_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'landing_location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'swing_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'result' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'spin_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'trajectory_details' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_event_states = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'current_state' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'sequence_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'tennis_set' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'game' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'server_person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'server_score' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'receiver_person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'receiver_score' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'service_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'context' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_events_tennis_event_states' => array('column' => 'event_id', 'unique' => 0), 'IDX_tennis_event_states_context' => array('column' => 'context', 'unique' => 0), 'IDX_tennis_event_states_seq_num' => array('column' => 'sequence_number', 'unique' => 0))
	);
	var $tennis_player_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'net_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unforced_errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_forehand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_backhand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_volley' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_return_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'returns_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'matches_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_service_return_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_service_return_points_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_service_return_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_service_return_points_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'return_games_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'return_games_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'return_games_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_converted' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_converted_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unforced_errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_forehand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_backhand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_volley' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_service_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'services_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'matches_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'aces' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_services_good' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_services_good_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_service_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_service_points_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_service_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_service_points_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'service_games_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'service_games_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'service_games_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_saved' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'break_points_saved_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'service_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'service_points_won_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'double_faults' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'first_service_top_speed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'second_services_good' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_services_good_pct' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'second_service_top_speed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'net_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unforced_errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_forehand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_backhand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_volley' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_set_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'net_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unforced_errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_forehand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_backhand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_volley' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tennis_team_stats = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'net_points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'net_points_played' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'points_won' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unforced_errors' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_forehand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_backhand' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'winners_volley' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $wagering_moneylines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rotation_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'vigorish' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_opening' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prediction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_wag_mon_boo_id__boo_id' => array('column' => 'bookmaker_id', 'unique' => 0), 'FK_wag_mon_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_wag_mon_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $wagering_odds_lines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rotation_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'numerator' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'denominator' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prediction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'payout_calculation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'payout_amount' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_wag_odd_lin_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_wag_odd_lin_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'FK_wag_odd_lin_boo_id__boo_id' => array('column' => 'bookmaker_id', 'unique' => 0))
	);
	var $wagering_runlines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rotation_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'vigorish' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_opening' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prediction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_wag_run_boo_id__boo_id' => array('column' => 'bookmaker_id', 'unique' => 0), 'FK_wag_run_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_wag_run_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $wagering_straight_spread_lines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rotation_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'vigorish' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_value_opening' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prediction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_wag_str_spr_lin_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0), 'FK_wag_str_spr_lin_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'FK_wag_str_spr_lin_boo_id__boo_id' => array('column' => 'bookmaker_id', 'unique' => 0))
	);
	var $wagering_total_score_lines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'bookmaker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'date_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rotation_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'vigorish' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_over' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'line_under' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'total_opening' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'prediction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'FK_wag_tot_sco_lin_boo_id__boo_id' => array('column' => 'bookmaker_id', 'unique' => 0), 'FK_wag_tot_sco_lin_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0), 'FK_wag_tot_sco_lin_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0))
	);
	var $weather_conditions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'temperature' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'temperature_units' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'humidity' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'clouds' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'wind_direction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'wind_velocity' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'weather_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_wea_con_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
}
?>