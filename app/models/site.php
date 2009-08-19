<?php
class Site extends AppModel {

	var $name = 'Site';
	var $validate = array(
		'site_key' => array('notempty'),
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
		)
	);

	var $hasMany = array(
		'HomeSite' => array(
			'className' => 'Team',
			'foreignKey' => 'site_id',
			'dependent' => false
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'site_id',
			'dependent' => false
		)
	);
}
?>