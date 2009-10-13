<?php
class EventsSubSeason extends AppModel {

	var $name = 'EventsSubSeason';
	var $validate = array(
		'event_id' => array('numeric'),
		'sub_season_id' => array('numeric')
	);
}
?>