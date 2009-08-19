<?php
class Publisher extends AppModel {

	var $name = 'Publisher';
	var $validate = array(
		'publisher_key' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Bookmaker' => array(
			'className' => 'Bookmaker',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Season' => array(
			'className' => 'Season',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'publisher_id',
			'dependent' => false
		)
	);
}
?>