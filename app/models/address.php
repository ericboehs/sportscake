<?php
class Address extends AppModel {

	var $name = 'Address';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Location.Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
		)
	);
}
?>