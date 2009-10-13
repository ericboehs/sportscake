CREATE TABLE sports (
	id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
	sport_key VARCHAR(255) NOT NULL,
	name VARCHAR(255) NULL
) ENGINE = INNODB;

CREATE TABLE leagues (
	id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
	league_key VARCHAR(255) NOT NULL,
	sport_id INTEGER NOT NULL,
	name VARCHAR(255) NULL,
	nickname VARCHAR(255) NULL
) ENGINE = INNODB;

ALTER TABLE seasons 
	CHANGE season_key season_key VARCHAR(255)
	ADD name VARCHAR(255) AFTER season_key 
;

CREATE TABLE conferences (
	id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
	conference_key VARCHAR(255) NOT NULL,
	league_id INTEGER NOT NULL,
	name VARCHAR(255) NULL,
	shortname VARCHAR(255) NULL
) ENGINE = INNODB;

CREATE TABLE divisions (
	id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
	division_key VARCHAR(255) NOT NULL,
	conference_id INTEGER NOT NULL,
	name VARCHAR(255) NULL,
	active TINYINT(1) NULL
) ENGINE = INNODB;

#Drop sports specific tables we aren't currently using
DROP table `baseball_action_contact_details`;
DROP table `baseball_action_pitches`;
DROP table `baseball_action_plays`;
DROP table `baseball_action_substitutions`;
DROP table `baseball_defensive_group`;
DROP table `baseball_defensive_players`;
DROP table `baseball_defensive_stats`;
DROP table `baseball_event_states`;
DROP table `baseball_offensive_stats`;
DROP table `baseball_pitching_stats`;
DROP table `basketball_defensive_stats`;
DROP table `basketball_event_states`;
DROP table `basketball_offensive_stats`;
DROP table `basketball_rebounding_stats`;
DROP table `basketball_team_stats`;
DROP table `ice_hockey_action_participants`;
DROP table `ice_hockey_action_plays`;
DROP table `ice_hockey_defensive_stats`;
DROP table `ice_hockey_event_states`;
DROP table `ice_hockey_offensive_stats`;
DROP table `ice_hockey_player_stats`;
DROP table `motor_racing_event_states`;
DROP table `motor_racing_qualifying_stats`;
DROP table `motor_racing_race_stats`;
DROP table `soccer_action_fouls`;
DROP table `soccer_action_participants`;
DROP table `soccer_action_penalties`;
DROP table `soccer_action_plays`;
DROP table `soccer_action_substitutions`;
DROP table `soccer_defensive_stats`;
DROP table `soccer_event_states`;
DROP table `soccer_foul_stats`;
DROP table `soccer_offensive_stats`;
DROP table `tennis_action_points`;
DROP table `tennis_action_volleys`;
DROP table `tennis_event_states`;
DROP table `tennis_player_stats`;
DROP table `tennis_return_stats`;
DROP table `tennis_service_stats`;
DROP table `tennis_set_stats`;
DROP table `tennis_team_stats`;
DROP table `wagering_moneylines`;
DROP table `wagering_odds_lines`;
DROP table `wagering_runlines`;
DROP table `wagering_straight_spread_lines`;
DROP table `wagering_total_score_lines`;

#Drop other tables we don't use
DROP table `affiliation_phases`;
DROP table `affiliations`;
DROP table `affiliations_documents`;
DROP table `affiliation_events`;
DROP table `affiliation_media`;
DROP table `awards`;
DROP table `bookmakers`;
DROP table `db_info`;
DROP table `document_classes`;
DROP table `document_contents`;
DROP table `document_fixtures`;
DROP table `document_fixtures_events`;
DROP table `document_package_entry`;
DROP table `document_packages`;
DROP table `documents`;
DROP table `documents_media`;
DROP table `events_documents`;
DROP table `events_media`;
DROP table `key_aliases`;
DROP table `key_roots`;
DROP table `latest_revisions`;
DROP table `locations`;
DROP table `media`;
DROP table `media_captions`;
DROP table `media_contents`;
DROP table `media_keywords`;
DROP table `persons_documents`;
DROP table `persons_media`;
DROP table `publishers`;
DROP table `roles`;
DROP table `sites`;
DROP table `teams_documents`;
DROP table `teams_media`;
