<?php
class Media extends AppModel {

	var $name = 'Media';
	var $validate = array(
		'publisher_id' => array('numeric'),
		'credit_id' => array('numeric'),
		'creation_location_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
/*
		'Object' => array(
			'className' => 'Object',
			'foreignKey' => 'object_id',
		),
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'source_id',
		),
		'Revision' => array(
			'className' => 'Revision',
			'foreignKey' => 'revision_id',
		),
*/
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'Credit' => array(
			'className' => 'Person',
			'foreignKey' => 'credit_id',
		),
		'CreationLocation' => array(
			'className' => 'Location',
			'foreignKey' => 'creation_location_id',
		)
	);

	var $hasAndBelongsToMany = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'joinTable' => 'affiliations_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'affiliation_id',
			'unique' => true
		),
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'documents_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'document_id',
			'unique' => true
		),
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'event_id',
			'unique' => true
		),
		'Caption' => array(
			'className' => 'Caption',
			'joinTable' => 'media_captions',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'caption_id',
			'unique' => true
		),
		'Content' => array(
			'className' => 'Content',
			'joinTable' => 'media_contents',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'content_id',
			'unique' => true
		),
		'Keyword' => array(
			'className' => 'Keyword',
			'joinTable' => 'media_keywords',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'keyword_id',
			'unique' => true
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'persons_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'person_id',
			'unique' => true
		),
		'Team' => array(
			'className' => 'Team',
			'joinTable' => 'teams_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'team_id',
			'unique' => true
		)
	);
}
?>