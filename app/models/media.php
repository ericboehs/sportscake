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
		'Object' => array(
			'className' => 'Object',
			'foreignKey' => 'object_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'source_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Revision' => array(
			'className' => 'Revision',
			'foreignKey' => 'revision_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Credit' => array(
			'className' => 'Credit',
			'foreignKey' => 'credit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CreationLocation' => array(
			'className' => 'CreationLocation',
			'foreignKey' => 'creation_location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'joinTable' => 'affiliations_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'affiliation_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'documents_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'document_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'event_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Caption' => array(
			'className' => 'Caption',
			'joinTable' => 'media_captions',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'caption_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Content' => array(
			'className' => 'Content',
			'joinTable' => 'media_contents',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'content_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Keyword' => array(
			'className' => 'Keyword',
			'joinTable' => 'media_keywords',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'keyword_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'persons_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'person_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'joinTable' => 'teams_media',
			'foreignKey' => 'media_id',
			'associationForeignKey' => 'team_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>