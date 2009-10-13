<?php
$tables = array(
	'addresses',
	'affiliation_phases',
	'affiliations',
	'affiliations_documents',
	'affiliations_events',
	'affiliations_media',
	'american_football_action_participants',
	'american_football_action_plays',
	'american_football_defensive_stats',
	'american_football_down_progress_stats',
	'american_football_event_states',
	'american_football_fumbles_stats',
	'american_football_offensive_stats',
	'american_football_passing_stats',
	'american_football_penalties_stats',
	'american_football_rushing_stats',
	'american_football_sacks_against_stats',
	'american_football_scoring_stats',
	'american_football_special_teams_stats',
	'american_football_team_stats',
	'awards',
	'bookmakers',
	'core_stats',
	'db_info',
	'display_names',
	'document_classes',
	'document_contents',
	'document_fixtures',
	'document_fixtures_events',
	'document_package_entry',
	'document_packages',
	'documents',
	'documents_media',
	'event_action_fouls',
	'event_action_participants',
	'event_action_penalties',
	'event_action_plays',
	'event_action_substitutions',
	'event_states',
	'events',
	'events_documents',
	'events_media',
	'events_sub_seasons',
	'injury_phases',
	'key_aliases',
	'key_roots',
	'latest_revisions',
	'locations',
	'media',
	'media_captions',
	'media_contents',
	'media_keywords',
	'outcome_totals',
	'participants_events',
	'penalty_stats',
	'periods',
	'person_event_metadata',
	'person_phases',
	'persons',
	'persons_documents',
	'persons_media',
	'positions',
	'publishers',
	'rankings',
	'records',
	'roles',
	'seasons',
	'sites',
	'standing_subgroups',
	'standings',
	'stats',
	'sub_periods',
	'sub_seasons',
	'team_phases',
	'teams',
	'teams_documents',
	'teams_media',
	'weather_conditions'
);

// we connect to example.com and port 3307
$link = mysql_connect('127.0.0.1', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('sportsdb', $link);
if (!$db_selected) {
    die ('Can\'t use sportsdb : ' . mysql_error());
}


foreach($tables as $table_name){
	$query = 'DESCRIBE '.$table_name;

	$result = mysql_query($query);


	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query;
	    die($message);
	}

	while ($row = mysql_fetch_assoc($result)) {
	    $described_tables[$table_name][] = ($row['Field']);
	}
}


//print_r($described_tables);

foreach($described_tables as $table_name => $table_coulmns){
	echo $table_name."\n";
	foreach($table_coulmns as $coulmn){
		echo "\t".$coulmn."\n";
	}
	echo "\n";
}


mysql_close($link);
?>