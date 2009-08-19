<?php
class EventsSubSeason extends AppModel {

	var $name = 'EventsSubSeason';
	var $validate = array(
		'event_id' => array('numeric'),
		'sub_season_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubSeason' => array(
			'className' => 'SubSeason',
			'foreignKey' => 'sub_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>