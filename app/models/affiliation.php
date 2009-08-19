<?php
class Affiliation extends AppModel {

	var $name = 'Affiliation';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		)
	);

	var $hasMany = array(
		'AffiliationPhase' => array(
			'className' => 'AffiliationPhase',
			'foreignKey' => 'affiliation_id',
			'dependent' => false
		),
		'AncestorAffiliation' => array(
			'className' => 'AffiliationPhase',
			'foreignKey' => 'ancestor_affiliation_id',
			'dependent' => false
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'affiliation_id',
			'dependent' => false
		),
		'Season' => array(
			'className' => 'Season',
			'foreignKey' => 'league_id',
			'dependent' => false
		),
		'StandingSubgroup' => array(
			'className' => 'StandingSubgroup',
			'foreignKey' => 'affiliation_id',
			'dependent' => false
		),
		'Standing' => array(
			'className' => 'Standing',
			'foreignKey' => 'affiliation_id',
			'dependent' => false
		),
		'TeamPhase' => array(
			'className' => 'TeamPhase',
			'foreignKey' => 'affiliation_id',
			'dependent' => false
		)
	);

	var $hasAndBelongsToMany = array(
		'Document' => array(
			'className' => 'Document',
			'joinTable' => 'affiliations_documents',
			'foreignKey' => 'affiliation_id',
			'associationForeignKey' => 'document_id',
			'unique' => true
		),
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'affiliations_events',
			'foreignKey' => 'affiliation_id',
			'associationForeignKey' => 'event_id',
			'unique' => true
		),
		'Media' => array(
			'className' => 'Media',
			'joinTable' => 'affiliations_media',
			'foreignKey' => 'affiliation_id',
			'associationForeignKey' => 'media_id',
			'unique' => true
		)
	);
}
?>