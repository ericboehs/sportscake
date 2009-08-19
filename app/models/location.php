<?php
class Location extends AppModel {

	var $name = 'Location';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'BirthLocation' => array(
			'className' => 'Person',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'HometownLocation' => array(
			'className' => 'Person',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'ResidenceLocation' => array(
			'className' => 'Person',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'DeathLocation' => array(
			'className' => 'Person',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'Bookmaker' => array(
			'className' => 'Bookmaker',
			'foreignKey' => 'location_id',
			'dependent' => false
		),
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'location_id',
			'dependent' => false
		)
	);
}
?>