<?php
class SubSeason extends AppModel {

	var $name = 'SubSeason';
	var $validate = array(
		'sub_season_key' => array('notempty'),
		'season_id' => array('numeric'),
		'sub_season_type' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Season' => array(
			'className' => 'Season',
			'foreignKey' => 'season_id',
		)
	);

	var $hasMany = array(
		'Standing' => array(
			'className' => 'Standing',
			'foreignKey' => 'sub_season_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_sub_seasons',
			'foreignKey' => 'sub_season_id',
			'associationForeignKey' => 'event_id',
			'unique' => true
		)
	);
}
?>