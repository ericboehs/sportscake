<?php
class DocumentFixture extends AppModel {

	var $name = 'DocumentFixture';
	var $validate = array(
		'publisher_id' => array('numeric'),
		'document_class_id' => array('numeric')
	);

	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'DocumentClass' => array(
			'className' => 'DocumentClass',
			'foreignKey' => 'document_class_id',
		)
	);

	var $hasMany = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_fixture_id',
			'dependent' => false
		),
		'Ranking' => array( //NOTE: There are no foriegn keys setup in the DB for this
			'className' => 'Ranking',
			'foreignKey' => 'document_fixture_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'document_fixtures_events',
			'foreignKey' => 'document_fixture_id',
			'associationForeignKey' => 'event_id',
			'unique' => true
		)
	);
}
?>