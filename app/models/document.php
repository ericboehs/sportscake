<?php
class Document extends AppModel {

	var $name = 'Document';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	//TODO: This file needs to be looked over
	var $belongsTo = array(
		// 'Doc' => array( //NOTE: This table doesn't exist.. but it seems like it sould
		// 	'className' => 'Doc',
		// 	'foreignKey' => 'doc_id',
		// ),
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		// 'Revision' => array( //NOTE: This table doesn't exist.. but it seems like it sould
		// 	'className' => 'Revision',
		// 	'foreignKey' => 'revision_id',
		// ),
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_fixture_id',
		),
		'PublisherSource' => array(
			'className' => 'Publisher',
			'foreignKey' => 'source_id',
		)
	);

	var $hasMany = array(
		'DocumentContent' => array(
			'className' => 'DocumentContent',
			'foreignKey' => 'document_id',
			'dependent' => false
		),
		'DocumentPackageEntry' => array(
			'className' => 'DocumentPackageEntry',
			'foreignKey' => 'document_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'joinTable' => 'affiliations_documents',
			'foreignKey' => 'document_id',
			'associationForeignKey' => 'affiliation_id',
			'unique' => true
		),
		'Media' => array(
			'className' => 'Media',
			'joinTable' => 'documents_media',
			'foreignKey' => 'document_id',
			'associationForeignKey' => 'media_id',
			'unique' => true
		),
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_documents',
			'foreignKey' => 'document_id',
			'associationForeignKey' => 'event_id',
			'unique' => true
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'persons_documents',
			'foreignKey' => 'document_id',
			'associationForeignKey' => 'person_id',
			'unique' => true
		),
		'Team' => array(
			'className' => 'Team',
			'joinTable' => 'teams_documents',
			'foreignKey' => 'document_id',
			'associationForeignKey' => 'team_id',
			'unique' => true
		)
	);
}
?>