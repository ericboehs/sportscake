<?php
class Document extends AppModel {

	var $name = 'Document';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Doc' => array(
			'className' => 'Doc',
			'foreignKey' => 'doc_id',
		),
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'Revision' => array(
			'className' => 'Revision',
			'foreignKey' => 'revision_id',
		),
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_fixture_id',
		),
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'source_id',
		)
	);

	var $hasOne = array(
		'DocumentContent' => array(
			'className' => 'DocumentContent',
			'foreignKey' => 'document_id',
			'dependent' => false,
		),
		'DocumentPackageEntry' => array(
			'className' => 'DocumentPackageEntry',
			'foreignKey' => 'document_id',
			'dependent' => false,
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