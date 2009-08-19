<?php
class DocumentFixturesEvent extends AppModel {

	var $name = 'DocumentFixturesEvent';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_fixture_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LatestDocument' => array(
			'className' => 'LatestDocument',
			'foreignKey' => 'latest_document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>